<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Scrollable Feed</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      margin: 0;
    }

    /* Fixed header */
    header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      height: 70px;
      background: #343a40;
      color: #fff;
      z-index: 1000;
      display: flex;
      align-items: center;
      padding: 0 20px;
    }

    /* Layout container */
    .layout {
      display: flex;
      height: calc(100vh - 70px); /* full height minus header */
      margin-top: 70px;
    }

    /* Fixed left */
    .left-sidebar {
      width: 250px;
      background: #f8f9fa;
      overflow-y: auto;
      position: fixed;
      top: 70px;
      bottom: 0;
      left: 0;
      padding: 1rem;
      border-right: 1px solid #ddd;
    }

    /* Fixed right */
    .right-sidebar {
      width: 250px;
      background: #f8f9fa;
      overflow-y: auto;
      position: fixed;
      top: 70px;
      bottom: 0;
      right: 0;
      padding: 1rem;
      border-left: 1px solid #ddd;
    }

    /* Scrollable center feed */
    .main-feed {
      margin-left: 250px;
      margin-right: 250px;
      padding: 1rem;
      height: calc(100vh - 70px);
      overflow-y: auto;
      background: #fff;
    }

    .post {
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 1rem;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>

  <!-- Fixed Header -->
  <header>
    <h5>AlgoNect Header</h5>
  </header>

  <!-- Layout -->
  <div class="layout">

    <!-- Left Sidebar -->
    <aside class="left-sidebar">
      <h6>Menu</h6>
      <ul class="nav flex-column">
        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Advice</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Rant</a></li>
      </ul>
    </aside>

    <!-- Main Feed (Scrollable) -->
    <main class="main-feed">
      <?php for ($i = 1; $i <= 20; $i++): ?>
        <div class="post">
          <h6>Post <?= $i ?></h6>
          <p>This is a demo post number <?= $i ?>.</p>
        </div>
      <?php endfor; ?>
    </main>

    <!-- Right Sidebar -->
    <aside class="right-sidebar">
      <h6>Right Panel</h6>
      <p>Widgets or trending content here.</p>
    </aside>

  </div>

</body>
</html>
