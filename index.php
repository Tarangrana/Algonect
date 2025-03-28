<?php
session_start();
$user = [
    'name' => 'Yaman',
    'profile_pic' => 'assets/images/default-pfp.png'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AlgoNect - Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css\style.css">
</head>
<body>

<!-- Header -->
<div class="header">
  <h4 class="text-primary m-0">AlgoNect</h4>
  <div>
    <a href="#" class="btn btn-outline-primary me-2">Log in</a>
    <a href="#" class="btn btn-primary">Sign Up</a>
  </div>
</div>

<!-- Main Grid -->
<div class="container-fluid">
  <div class="row">

    <!-- Left Sidebar -->
    <div class="col-md-2 sidebar">
      <ul class="nav flex-column">
        <li class="nav-item mb-3"><a href="#" class="nav-link text-dark fw-semibold">🏠 Home</a></li>

        <!-- Collapsible Spaces -->
        <li class="nav-item mb-2">
          <a class="nav-link text-muted d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#spacesMenu" role="button" aria-expanded="true" aria-controls="spacesMenu">
            <strong>Spaces</strong> <span class="text-secondary">&#9662;</span>
          </a>
          <div class="collapse show" id="spacesMenu">
            <ul class="nav flex-column ms-3">
              <li class="nav-item"><a href="#" class="nav-link text-muted">General</a></li>
              <li class="nav-item"><a href="#" class="nav-link text-muted">Advice</a></li>
              <li class="nav-item"><a href="#" class="nav-link text-muted">Rant</a></li>
              <li class="nav-item"><a href="#" class="nav-link text-muted">Storytime</a></li>
              <li class="nav-item"><a href="#" class="nav-link text-muted">Question</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item mt-3"><a href="#" class="nav-link text-dark">📚 Resources</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-dark">📅 Events</a></li>
      </ul>
    </div>

    <!-- Center Feed (Public View) -->
    <div class="col-md-6 main-feed">

      <!-- Sample Post 1 -->
      <div class="post-card">
        <div class="d-flex align-items-center mb-2">
          <img src="<?= $user['profile_pic'] ?>" width="35" height="35" class="rounded-circle me-2">
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

      <!-- Sample Post 2 -->
      <div class="post-card">
        <div class="d-flex align-items-center mb-2">
          <img src="<?= $user['profile_pic'] ?>" width="35" height="35" class="rounded-circle me-2">
          <div>
            <div class="post-author">Saketh Ch</div>
            <small class="text-muted">1d • <span class="text-primary">#general</span></small>
          </div>
        </div>
        <h6 class="fw-bold">FLIX BUS STORIES</h6>
        <p class="text-muted mb-2">
          First time in last 6 years of travelling in flix bus i saw how lavatory is deposited when bus was running 😂<br>
          Then in one bus stop...
        </p>
        <div class="d-flex justify-content-start text-muted fs-6">
          <span class="me-4">🔺 9</span>
          <span>💬 3</span>
        </div>
      </div>

    </div>

    <!-- Right Sidebar -->
    <div class="col-md-4 rightbar">
      <h6 class="fw-bold">Contents</h6>
      <p class="text-muted">This area is reserved for future widgets like leaderboard, trending posts, etc.</p>
    </div>

  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
