<?php
session_start();

// Check if the user is logged in, if not redirect to login page
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AlgoNect - Home</title>

  <!-- Styles -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  
  <style>
    .left-sidebar,
    .right-sidebar {
      position: fixed;
      top: 80px;
      height: calc(100vh - 80px);
      overflow: hidden;
    }

    .left-sidebar {
      left: 18px;
    }

    .right-sidebar {
      right: 18px;
    }

    .main-feed {
      margin-left: 300px;
      margin-right: 300px;
      margin-top: 80px;
    }
    body.dark-mode textarea,
body.dark-mode .form-control {
  background-color: #1e1e1e;
  color: #f1f1f1; /* <- This makes the input text light */
  border: 1px solid #444;
  border-radius: 8px;
}

body.dark-mode textarea::placeholder {
  color: #aaa; /* optional: make placeholder visible in dark mode */
}

  </style>
</head>

<body>
  <div class="d-flex flex-column min-vh-100">
    <?php include 'includes/header.php'; ?>

    <!-- Main Grid -->
    <div class="container-fluid flex-fill">
      <div class="layout-wrapper d-flex w-100 justify-content-between" style="max-width: 1400px; margin: 0 auto;">

        <!-- Left Sidebar -->
        <div id="leftSidebar" class="left-sidebar">
          <?php include 'includes/left.php'; ?>
        </div>

        <!-- Center Feed -->
        <div class="main-feed" id="mainFeed">

        <!-- Post Input -->
        <div class="d-flex align-items-center mb-3 p-3 rounded shadow-sm post-input-card">
  <img src="<?= $_SESSION['profile_pic'] ?? 'assets/images/default-pfp.png' ?>" width="45" height="45" class="rounded-circle me-3" alt="Profile Picture">
  <input type="text"
         class="form-control rounded-pill custom-dark-input border-0"
         placeholder="Create a post..."
         data-bs-toggle="modal"
         data-bs-target="#createPostModal"
         readonly>
</div>


        <!-- Posts -->
          <?php
          require_once 'includes/db_connect.php';
          $tagFilter = $_GET['tag'] ?? null;

          if ($tagFilter) {
            $stmt = $conn->prepare("SELECT posts.*, users_info.name, users_info.profile_pic FROM posts JOIN users_info ON posts.user_id = users_info.id WHERE posts.tag = ? ORDER BY posts.created_at DESC");
            $stmt->bind_param("s", $tagFilter);
          } else {
            $stmt = $conn->prepare("SELECT posts.*, users_info.name, users_info.profile_pic FROM posts JOIN users_info ON posts.user_id = users_info.id ORDER BY posts.created_at DESC");
          }

          $stmt->execute();
          $result = $stmt->get_result();

          while ($row = $result->fetch_assoc()):
          ?>
            <div class="post-card p-4 mb-4">
              <div class="d-flex align-items-center mb-3">
                <?php $picPath = (!empty($row['profile_pic']) && strpos($row['profile_pic'], 'pics/') !== 0) ? "pics/" . $row['profile_pic'] : (!empty($row['profile_pic']) ? $row['profile_pic'] : "pics/default-pfp.png"); ?>
                <img src="<?= $picPath ?>" class="rounded-circle me-3" width="40" height="40" />
                <div>
                  <div class="fw-semibold"><?= htmlspecialchars($row['name']) ?></div>
                  <small class="text-muted"><?= date("d M, Y", strtotime($row['created_at'])) ?> • <span class="text-primary">#<?= htmlspecialchars($row['tag']) ?></span></small>
                </div>
              </div>
              <h6 class="fw-bold"><?= htmlspecialchars($row['title']) ?></h6>
              <p class="text-muted"><?= nl2br(htmlspecialchars($row['content'])) ?></p>
              <?php if (!empty($row['image_path'])): ?>
                <img src="<?= htmlspecialchars($row['image_path']) ?>" class="img-fluid rounded mb-3" style="max-height: 400px; object-fit: cover;" alt="Post Image">
              <?php endif; ?>

              <!-- Comments -->
              <form action="php/add_comment.php" method="POST" class="mb-3">
                <input type="hidden" name="post_id" value="<?= $row['id'] ?>">
                <textarea name="content" class="form-control mb-2" rows="2" placeholder="Add a comment..." required></textarea>
                <button type="submit" class="btn btn-sm btn-primary">Comment</button>
              </form>

              <?php
              $commentQuery = $conn->prepare("SELECT c.content, u.name, u.profile_pic FROM comments c JOIN users_info u ON c.user_id = u.id WHERE c.post_id = ? ORDER BY c.created_at DESC");

              $commentQuery->bind_param("i", $row['id']);
              $commentQuery->execute();
              $commentResult = $commentQuery->get_result();
              while ($comment = $commentResult->fetch_assoc()):
              ?>
                <?php
$commentPic = (!empty($comment['profile_pic']) && strpos($comment['profile_pic'], 'pics/') !== 0)
  ? "pics/" . $comment['profile_pic']
  : (!empty($comment['profile_pic']) ? $comment['profile_pic'] : "pics/default-pfp.png");
?>
<div class="d-flex align-items-start mb-2 ms-3">
  <img src="<?= $commentPic ?>" class="rounded-circle me-2" width="30" height="30" alt="Commenter">
  <div>
    <strong><?= htmlspecialchars($comment['name']) ?></strong>
    <div><?= htmlspecialchars($comment['content']) ?></div>
  </div>
</div>

              <?php endwhile; ?>

              <!-- Like Button and Count -->

              <button class="btn btn-sm btn-outline-danger like-btn" data-post-id="<?= $row['id'] ?>">❤️ Like</button>
<span class="ms-2 like-count" id="like-count-<?= $row['id'] ?>">
  <?php
    $likeStmt = $conn->prepare("SELECT COUNT(*) FROM likes WHERE post_id = ?");
    $likeStmt->bind_param("i", $row['id']);
    $likeStmt->execute();
    $likeStmt->bind_result($likeCount);
    $likeStmt->fetch();
    $likeStmt->close();
    echo "$likeCount likes";
  ?>
</span>
              <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $row['user_id']): ?>
                <form action="php/delete_post.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');" class="d-inline">
                  <input type="hidden" name="post_id" value="<?= $row['id'] ?>">
                  <button type="submit" class="btn btn-sm btn-outline-danger">🗑️ Delete</button>
                </form>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        </div>

        <!-- Right Sidebar -->
        <div id="rightSidebar" class="right-sidebar">
          <?php include 'includes/right.php'; ?>
        </div>
      </div>
    </div>

    <!-- Creating Post -->
<div class="modal fade" id="createPostModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4 rounded-4" style="backdrop-filter: blur(8px);">
      <div class="modal-body">

        <h6 class="text-primary fw-semibold mb-3">Create Post:</h6>

        <form action="php/create_post.php" method="POST" enctype="multipart/form-data">
          <div class="d-flex align-items-center mb-3">
            <img src="<?= $_SESSION['profile_pic'] ?? 'assets/images/default-pfp.png' ?>" width="45" height="45" class="rounded-circle me-3" alt="Profile Picture">
            <span class="fw-semibold"><?= $_SESSION['name'] ?? 'Tarang Rana' ?></span>
            <span class="ms-2 text-muted">in</span>
            <select name="tag" class="form-select ms-2 w-auto" required>
              <option value="" disabled selected>Select a space...</option>
              <option value="general">#general</option>
              <option value="advice">#advice</option>
              <option value="rant">#rant</option>
              <option value="storytime">#storytime</option>
              <option value="question">#question</option>
            </select>
          </div>

          <input type="text" name="title" class="form-control mb-3 rounded" placeholder="Add a title" required>
          <textarea name="content" class="form-control mb-3 rounded" rows="5" placeholder="What do you want to talk about..." required></textarea>

          <div class="mb-3">
            <label class="form-label fw-semibold">Add photos</label>
            <input type="file" name="post_image" class="form-control" accept="image/*" onchange="previewSingleImage(event)">
            <div id="singlePreview" class="mt-2"></div>
            <div id="imagePreviewContainer" class="d-flex flex-wrap gap-2 mt-2"></div>
          </div>

          <div class="text-end">
            <button type="submit" class="btn btn-primary px-4 rounded-pill">Post</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

    <?php include 'includes/footer.php'; ?>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/likeHandler.js"></script>
  <script src="js/previewImages.js"></script>

  <!-- Dark Mode Toggle -->
  <script>
    const toggle = document.getElementById('darkModeToggle');
    if (localStorage.getItem('darkMode') === 'enabled') {
      document.body.classList.add('dark-mode');
      if (toggle) toggle.checked = true;
    }

    if (toggle) {
      toggle.addEventListener('change', () => {
        document.body.classList.toggle('dark-mode');
        localStorage.setItem('darkMode', document.body.classList.contains('dark-mode') ? 'enabled' : 'disabled');
      });
    }

    document.getElementById("leftToggle")?.addEventListener("click", () => {
      const sidebar = document.getElementById("leftSidebar");
      sidebar.style.display = sidebar.style.display === "block" ? "none" : "block";
    });

    document.getElementById("rightToggle")?.addEventListener("click", () => {
      const sidebar = document.getElementById("rightSidebar");
      sidebar.style.display = sidebar.style.display === "block" ? "none" : "block";
    });

    window.addEventListener("resize", () => {
      if (window.innerWidth > 1150) {
        document.getElementById("leftSidebar").style.display = "";
        document.getElementById("rightSidebar").style.display = "";
      }
    });
  </script>
  <script>
    // Fucntion to load resources
  function loadResources() {
    const mainFeed = document.getElementById('mainFeed');
    mainFeed.innerHTML = `
      <h4 class="mb-3 fw-bold">Resources</h4>
      <iframe src="https://algomau.ca/" width="100%" height="800" style="border: none; border-radius: 10px;"></iframe>
    `;
  }
</script>

</body>

</html>
