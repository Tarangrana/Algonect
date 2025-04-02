<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Events - AlgoNect</title>

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
  </style>
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="container-fluid">
  <div class="row">

    <!-- Left Sidebar -->
    <div class="col-md-2 p-0">
  <?php include 'includes/left.php'; ?>
</div>

    <!-- Center Column (Main Events Section) -->
    <div class="col-md-6 main-feed">
      <h4 class="fw-bold text-primary mb-3">Events</h4>
      <p class="text-muted mb-4">Past Events</p>

      <!-- Event 1 -->
      <div class="event-card p-3 mb-4">
        <img src="assets/images/event1.jpg" alt="Resume Workshop" class="event-img">
        <div class="event-title">What the Heck is a Good Resume? A Workshop with Iren Azra Zou</div>
        <div class="event-date mt-2">Wednesday, Aug. 21st</div>
      </div>

      <!-- Event 2 -->
      <div class="event-card p-3 mb-4">
        <img src="assets/images/event2.jpg" alt="Visa Options" class="event-img">
        <div class="event-title">Navigating Visa Options for International Student Entrepreneurs</div>
        <div class="event-date mt-2">Saturday, Aug. 10th</div>
      </div>
    </div>

    <!-- Right Sidebar -->
    <div class="col-md-2 p-0">
  <?php include 'includes/right.php'; ?>
</div>


  </div>
</div>

<?php include 'includes/footer.php'; ?>

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

</body>
</html>
