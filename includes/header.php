<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

$isLoggedIn = isset($_SESSION['user_id']);
?>


<!-- Fixed Header -->
<header>
  <nav class="navbar navbar-expand-lg shadow-sm px-4 mb-3 bg-white">
    <a class="navbar-brand fw-bold text-primary" href="index.php">AlgoNect</a>

    <div class="ms-auto d-flex align-items-center gap-3">
      <!-- Dark mode toggle -->
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="darkModeToggle">
      </div>

      <?php if ($isLoggedIn): ?>
        <!-- Profile Dropdown -->
        <div class="dropdown">
          <img src="<?= $_SESSION['profile_pic'] ?? 'assets/images/default-pfp.png' ?>" 
               alt="Profile" 
               class="rounded-circle dropdown-toggle" 
               width="40" height="40" 
               data-bs-toggle="dropdown" 
               role="button" 
               aria-expanded="false" 
               style="cursor:pointer; border: 2px solid transparent;">
    
          <ul class="dropdown-menu dropdown-menu-end shadow-sm mt-2">
            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a href="#" class="btn btn-outline-danger px-4 py-1" style="margin: 0 auto;" onclick="confirmLogout()">Sign out</a></li>
          </ul>
        </div>
      <?php else: ?>
        <a href="login.php" class="btn btn-outline-primary">Log in</a>
        <a href="signup.php" class="btn btn-primary">Sign Up</a>
      <?php endif; ?>
    </div>
  </nav>
</header>
