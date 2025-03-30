<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
?>

<!-- Header / Navbar -->
<nav class="navbar navbar-expand-lg shadow-sm px-4 mb-3">
  <a class="navbar-brand fw-bold text-primary" href="index.php">AlgoNect</a>

  <div class="ms-auto d-flex align-items-center gap-3">
    <!-- Dark mode toggle -->
    <div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" id="darkModeToggle">
    </div>

    <?php if ($isLoggedIn): ?>
      <a href="profile.php" class="btn btn-outline-success">
        👤 <?= htmlspecialchars($_SESSION['name']) ?>
      </a>
    <?php else: ?>
      <a href="login.php" class="btn btn-outline-primary">Log in</a>
      <a href="signup.php" class="btn btn-primary">Sign Up</a>
    <?php endif; ?>
  </div>
</nav>
