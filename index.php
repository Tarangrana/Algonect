<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>AlgoNect - Home</title>

  <!-- Styles -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>

  <style>
    .post-card {
      border-radius: 1rem;
      background-color: var(--card-bg);
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
      transition: transform 0.2s, background-color 0.3s;
    }

    .post-card:hover {
      transform: translateY(-5px);
    }
  </style>
</head>
<body>

<?php include 'includes/header.php'; ?>

<!-- Main Grid -->
<div class="container-fluid">
  <div class="row">

    <!-- Left Sidebar -->
    <?php include 'includes/left.php'; ?>

    <!-- Center Feed -->
    <div class="col-md-6 main-feed">

    <!-- Create Post Shortcut Input -->
<div class="d-flex align-items-center mb-3 p-3 bg-white rounded shadow-sm">
  <img src="<?= $_SESSION['profile_pic'] ?? 'assets/images/default-pfp.png' ?>" width="45" height="45" class="rounded-circle me-3" alt="Profile Picture">
  
  <input type="text" 
         class="form-control rounded-pill bg-light border-0 text-muted" 
         placeholder="Create a post..." 
         data-bs-toggle="modal" 
         data-bs-target="#createPostModal" 
         readonly>
</div>

    <?php
require_once 'includes/db_connect.php';
$sql = "SELECT posts.*, users_info.name, users_info.profile_pic FROM posts 
        JOIN users_info ON posts.user_id = users_info.id 
        ORDER BY posts.created_at DESC";

$result = $conn->query($sql);


while ($row = $result->fetch_assoc()):
?>
  <div class="post-card p-4 mb-4">
    <div class="d-flex align-items-center mb-3">
    <?php
$picPath = !empty($row['profile_pic']) ? "pics/" . $row['profile_pic'] : "assets/images/default-pfp.png";
?>
<img src="<?= $picPath ?>" class="rounded-circle me-3" width="40" height="40" />

      <div>
        <div class="fw-semibold"><?= htmlspecialchars($row['name']) ?></div>
        <small class="text-muted"><?= date("d M, Y", strtotime($row['created_at'])) ?> • <span class="text-primary">#<?= htmlspecialchars($row['tag']) ?></span></small>
      </div>
    </div>
    <h6 class="fw-bold"><?= htmlspecialchars($row['title']) ?></h6>
    <p class="text-muted"><?= nl2br(htmlspecialchars($row['content'])) ?></p>
  </div>
<?php endwhile; ?>

    </div>

    <!-- Right Sidebar -->
    <?php include 'includes/right.php'; ?>

  </div>
</div>

<!-- Creating Post -->
<div class="modal fade" id="createPostModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4 rounded-4" style="backdrop-filter: blur(8px);">
      <div class="modal-body">

        <h6 class="text-primary fw-semibold mb-3">Create Post:</h6>

        <form action="php\create_post.php" method="POST" enctype="multipart/form-data">

          <!-- Profile + Tag Selector -->
          <div class="d-flex align-items-center mb-3">
            <img src="<?= $_SESSION['profile_pic'] ?? 'assets/images/default-pfp.png' ?>" width="45" height="45" class="rounded-circle me-2">
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

          <!-- Title -->
          <input type="text" name="title" class="form-control mb-3 rounded" placeholder="Add a title" required>

          <!-- Content -->
          <textarea name="content" class="form-control mb-3 rounded" rows="5" placeholder="What do you want to talk about..." required></textarea>

          <!-- Photo Upload -->
          <div class="mb-3 text-muted">
            <i class="bi bi-image me-1"></i>
            Add photo
            <input type="file" name="photo" class="form-control mt-2" disabled>
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

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const toggle = document.getElementById('darkModeToggle');

  // Load dark mode preference
  if (localStorage.getItem('darkMode') === 'enabled') {
    document.body.classList.add('dark-mode');
    if (toggle) toggle.checked = true;
  }

  // Handle toggle switch
  if (toggle) {
    toggle.addEventListener('change', () => {
      document.body.classList.toggle('dark-mode');
      localStorage.setItem('darkMode', document.body.classList.contains('dark-mode') ? 'enabled' : 'disabled');
    });
  }
</script>
<script>
  function confirmLogout() {
    if (confirm("Are you sure you want to sign out?")) {
      window.location.href = "logout.php";
    }
  }
</script>


</body>
</html>