<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>AlgoNect - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>

  <style>
    :root {
      --bg-color: #f8f9fa;
      --text-color: #212529;
      --card-bg: #ffffff;
      --muted-color: #6c757d;
      --link-color: #0d6efd;
    }

    body.dark-mode {
      --bg-color: #121212;
      --text-color: #eaeaea;
      --card-bg: #1e1e1e;
      --muted-color: #bbbbbb;
      --link-color: #58a6ff;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--bg-color);
      color: var(--text-color);
    }

    .post-card {
      border-radius: 1rem;
      background-color: var(--card-bg);
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
      transition: transform 0.2s, background-color 0.3s;
    }

    .post-card:hover {
      transform: translateY(-5px);
    }

    .navbar, .sidebar, .rightbar {
      background-color: var(--card-bg) !important;
      color: var(--text-color) !important;
    }

    .text-muted {
      color: var(--muted-color) !important;
    }

    a.nav-link,
    .nav-link.text-dark,
    .nav-link.text-muted {
      color: var(--text-color) !important;
    }

    h6, h4, h3, p, small, span {
      color: var(--text-color);
    }

    .btn-outline-primary {
      color: var(--text-color);
      border-color: var(--text-color);
    }

    .btn-outline-primary:hover {
      background-color: var(--text-color);
      color: var(--bg-color);
    }

    .form-check-input:checked {
      background-color: #0d6efd;
      border-color: #0d6efd;
    }
  </style>
</head>
<body>

<?php include 'includes/header.php'; ?>

<!-- Main Grid -->
<div class="container-fluid">
  <div class="row">

  <?php include 'includes/left.php'; ?>

    <!-- Center Feed -->
    <div class="col-md-6 main-feed">

      <!-- Sample Post 1 -->
      <div class="post-card mb-4">
        <div class="d-flex align-items-center mb-2">
          <img src="assets/images/default-pfp.png" width="35" height="35" class="rounded-circle me-2">
          <div>
            <div class="post-author">Kavya</div>
            <small class="text-muted">5d • <span class="text-primary">#question</span></small>
          </div>
        </div>
        <h6 class="fw-bold">university related</h6>
        <p class="text-muted mb-2">
          guys b hnst why did i get rejected from university of washington (wasn’t my priority anyway) when i have like immaculate scores and pretty good extra curriculars according to me?
        </p>
        <div class="d-flex justify-content-start text-muted fs-6">
          <span class="me-4">🔺 6</span>
          <span>💬 5</span>
        </div>
      </div>
      <div class="post-card mb-4">
        <div class="d-flex align-items-center mb-2">
          <img src="assets/images/default-pfp.png" width="35" height="35" class="rounded-circle me-2">
          <div>
            <div class="post-author">Kavya</div>
            <small class="text-muted">5d • <span class="text-primary">#question</span></small>
          </div>
        </div>
        <h6 class="fw-bold">university related</h6>
        <p class="text-muted mb-2">
          guys b hnst why did i get rejected from university of washington (wasn’t my priority anyway) when i have like immaculate scores and pretty good extra curriculars according to me?
        </p>
        <div class="d-flex justify-content-start text-muted fs-6">
          <span class="me-4">🔺 6</span>
          <span>💬 5</span>
        </div>
      </div>
      <div class="post-card mb-4">
        <div class="d-flex align-items-center mb-2">
          <img src="assets/images/default-pfp.png" width="35" height="35" class="rounded-circle me-2">
          <div>
            <div class="post-author">Kavya</div>
            <small class="text-muted">5d • <span class="text-primary">#question</span></small>
          </div>
        </div>
        <h6 class="fw-bold">university related</h6>
        <p class="text-muted mb-2">
          guys b hnst why did i get rejected from university of washington (wasn’t my priority anyway) when i have like immaculate scores and pretty good extra curriculars according to me?
        </p>
        <div class="d-flex justify-content-start text-muted fs-6">
          <span class="me-4">🔺 6</span>
          <span>💬 5</span>
        </div>
      </div>
      <div class="post-card mb-4">
        <div class="d-flex align-items-center mb-2">
          <img src="assets/images/default-pfp.png" width="35" height="35" class="rounded-circle me-2">
          <div>
            <div class="post-author">Kavya</div>
            <small class="text-muted">5d • <span class="text-primary">#question</span></small>
          </div>
        </div>
        <h6 class="fw-bold">university related</h6>
        <p class="text-muted mb-2">
          guys b hnst why did i get rejected from university of washington (wasn’t my priority anyway) when i have like immaculate scores and pretty good extra curriculars according to me?
        </p>
        <div class="d-flex justify-content-start text-muted fs-6">
          <span class="me-4">🔺 6</span>
          <span>💬 5</span>
        </div>
      </div>
      <div class="post-card mb-4">
        <div class="d-flex align-items-center mb-2">
          <img src="assets/images/default-pfp.png" width="35" height="35" class="rounded-circle me-2">
          <div>
            <div class="post-author">Kavya</div>
            <small class="text-muted">5d • <span class="text-primary">#question</span></small>
          </div>
        </div>
        <h6 class="fw-bold">university related</h6>
        <p class="text-muted mb-2">
          guys b hnst why did i get rejected from university of washington (wasn’t my priority anyway) when i have like immaculate scores and pretty good extra curriculars according to me?
        </p>
        <div class="d-flex justify-content-start text-muted fs-6">
          <span class="me-4">🔺 6</span>
          <span>💬 5</span>
        </div>
      </div>
      <div class="post-card mb-4">
        <div class="d-flex align-items-center mb-2">
          <img src="assets/images/default-pfp.png" width="35" height="35" class="rounded-circle me-2">
          <div>
            <div class="post-author">Kavya</div>
            <small class="text-muted">5d • <span class="text-primary">#question</span></small>
          </div>
        </div>
        <h6 class="fw-bold">university related</h6>
        <p class="text-muted mb-2">
          guys b hnst why did i get rejected from university of washington (wasn’t my priority anyway) when i have like immaculate scores and pretty good extra curriculars according to me?
        </p>
        <div class="d-flex justify-content-start text-muted fs-6">
          <span class="me-4">🔺 6</span>
          <span>💬 5</span>
        </div>
      </div>

        <!-- Post 2 -->
        <div class="post-card p-4">
          <div class="d-flex align-items-center mb-3">
            <img src="assets/images/default-pfp.png" class="rounded-circle me-3" width="40" height="40" />
            <div>
              <div class="fw-semibold">Saketh Ch</div>
              <small class="text-muted">1d • <span class="text-primary">#general</span></small>
            </div>
          </div>
          <h6 class="fw-bold">FLIX BUS STORIES</h6>
          <p class="text-muted">
            First time in last 6 years of travelling in flix bus I saw how lavatory is deposited when bus was running 😂 Then in one bus stop...
          </p>
          <div class="d-flex gap-4 text-muted">
            <span>🔺 9</span>
            <span>💬 3</span>
          </div>
        </div>
      </div>
    </main>

    <!-- Right Sidebar -->
    <?php include 'includes/right.php'; ?>

  </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const toggle = document.getElementById('darkModeToggle');
  if (toggle) {
    toggle.addEventListener('change', () => {
      document.body.classList.toggle('dark-mode');
    });
  }
</script>
<?php include 'includes/footer.php'; ?>

</body>
</html>
