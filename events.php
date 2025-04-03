<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Events - AlgoNect</title>

  <!-- Instant Dark Mode Before CSS Loads -->
  <script>
    if (localStorage.getItem('darkMode') === 'enabled') {
      document.documentElement.classList.add('dark-mode');
      document.body?.classList?.add('dark-mode');
    }
  </script>

  <!-- Styles -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="css/style.css" />

  <style>
    .event-card {
      border-radius: 1rem;
      background-color: var(--card-bg);
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
      transition: transform 0.2s ease;
    }

    .event-card:hover {
      transform: translateY(-5px);
    }

    .event-img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 1rem;
    }

    .event-title {
      font-weight: 600;
      font-size: 1.1rem;
    }

    .event-date {
      font-weight: 500;
      color: var(--link-color);
    }

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
  </style>
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="container-fluid">
  <div class="layout-wrapper d-flex w-100 justify-content-between" style="max-width: 1400px; margin: 0 auto;">

    <!-- Left Sidebar -->
    <div id="leftSidebar" class="left-sidebar">
      <?php include 'includes/left.php'; ?>
    </div>

    <!-- Center Column (Main Events Section) -->
    <div class="main-feed" id="mainFeed">
      <h4 class="fw-bold text-primary mb-3">Events</h4>
      <p class="text-muted mb-4">Past Events</p>

      <!-- Event 1 -->
      <div class="event-card p-3 mb-4">
        <img src="pics\image.png" alt="Resume Workshop" class="event-img">
        <div class="event-title">What the Heck is a Good Resume? A Workshop with Iren Azra Zou</div>
        <div class="event-date mt-2">Wednesday, Aug. 21st</div>
      </div>

      <!-- Event 2 -->
      <div class="event-card p-3 mb-4">
        <img src="pics\istockphoto-157383627-612x612.jpg" alt="Visa Options" class="event-img">
        <div class="event-title">Navigating Visa Options for International Student Entrepreneurs</div>
        <div class="event-date mt-2">Saturday, Aug. 10th</div>
      </div>
    </div>

    <!-- Right Sidebar -->
    <div id="rightSidebar" class="right-sidebar">
      <?php include 'includes/right.php'; ?>
    </div>

  </div>
</div>

<?php include 'includes/footer.php'; ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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

  // Optional: Make Resources work here too
  function loadResources() {
    const mainFeed = document.getElementById('mainFeed');
    mainFeed.innerHTML = `
      <h4 class="mb-3 fw-bold">Resources</h4>
      <iframe src="https://algomau.ca/" width="100%" height="800" style="border: none; border-radius: 10px;"></iframe>
    `;
  }
</script>
<script>
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


</body>
</html>
