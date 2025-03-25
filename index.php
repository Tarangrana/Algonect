<?php
session_start();
// Dummy user for now (later you'll pull this from your database)
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
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body { background-color: #f7f9fa; font-family: 'Poppins', sans-serif; }
        .sidebar { height: 100vh; background-color: #fff; border-right: 1px solid #e6e6e6; }
        .main-content { padding: 20px; }
        .post-card { border-radius: 15px; border: 1px solid #ddd; margin-bottom: 20px; background: white; }
        .post-author { font-weight: bold; }
        .leaderboard { font-size: 0.9rem; background: white; padding: 10px; border-radius: 10px; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <!-- Left Sidebar -->
        <div class="col-md-2 sidebar p-4">
            <h4 class="text-primary">AlgoNect</h4>
            <ul class="nav flex-column mt-4">
                <li class="nav-item mb-2"><a href="#" class="nav-link text-dark">🏠 Home</a></li>
                <li class="nav-item mb-2"><strong>Spaces</strong></li>
                <li class="nav-item"><a href="#" class="nav-link text-muted ps-3">General</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-muted ps-3">Advice</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-muted ps-3">Rant</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-muted ps-3">Storytime</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-muted ps-3">Question</a></li>
                <li class="nav-item mt-3"><a href="#" class="nav-link text-dark">📚 Resources</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-dark">📅 Events</a></li>
            </ul>
        </div>

        <!-- Center Feed -->
        <div class="col-md-7 main-content">
            <!-- Post Input -->
            <div class="d-flex mb-4">
                <img src="<?= $user['profile_pic'] ?>" width="40" height="40" class="rounded-circle me-3">
                <input type="text" class="form-control rounded-pill" placeholder="Create a post...">
            </div>

            <!-- Tabs -->
            <ul class="nav nav-tabs mb-3">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Popular</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">New</a>
                </li>
            </ul>

            <!-- Sample Post Card -->
            <div class="post-card p-3">
                <div class="d-flex align-items-center mb-2">
                    <img src="<?= $user['profile_pic'] ?>" width="35" height="35" class="rounded-circle me-2">
                    <div>
                        <div class="post-author">Yaman</div>
                        <small class="text-muted">6d • #rant</small>
                    </div>
                </div>
                <h5>Midnight strolls through campus...</h5>
                <p>There’s something peaceful about walking through campus at night after classes. The silence, the cool breeze, and the empty hallways.</p>
                <img src="assets/images/campus-night.jpg" class="img-fluid rounded mb-2">
                <div class="d-flex justify-content-between">
                    <span>🗨️ 5 Comments</span>
                    <span>❤️ 12 Likes</span>
                </div>
            </div>

        </div>

        <!-- Right Sidebar -->
        <div class="col-md-3 p-4">
            <div class="leaderboard">
                <h6 class="text-primary">🏆 Leaderboard</h6>
                <ol class="list-unstyled">
                    <li><img src="assets/images/default-pfp.png" width="20" class="rounded-circle me-2"> samk2uk <span class="float-end text-primary">77</span></li>
                    <li><img src="assets/images/default-pfp.png" width="20" class="rounded-circle me-2"> Tav <span class="float-end text-primary">69</span></li>
                    <li><img src="assets/images/default-pfp.png" width="20" class="rounded-circle me-2"> madhuuk <span class="float-end text-primary">40</span></li>
                </ol>
            </div>
        </div>
    </div>
</div>

</body>
</html>
