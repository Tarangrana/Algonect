<?php
session_start();
require_once 'includes/db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$userId = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT * FROM users_info WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Count posts
$postCountStmt = $conn->prepare("SELECT COUNT(*) AS total FROM posts WHERE user_id = ?");
$postCountStmt->bind_param("i", $userId);
$postCountStmt->execute();
$postCountResult = $postCountStmt->get_result();
$postData = $postCountResult->fetch_assoc();
$postCount = $postData['total'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Profile - AlgoNect</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    .profile-box {
      max-width: 600px;
      margin: 70px auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }
    .profile-pic {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 15px;
    }
    .center {
      text-align: center;
    }
  </style>
</head>
<body style="background-color:#f0f2f5;">
  <div class="profile-box text-center">
    <img src="<?= $_SESSION['profile_pic'] ?? 'assets/images/default-pfp.png' ?>" class="profile-pic" alt="Profile Picture">
    
    <form action="php/update_profile_pic.php" method="POST" enctype="multipart/form-data" class="mb-4">
      <input type="file" name="profile_pic" class="form-control mb-2" accept="image/*" required>
      <button type="submit" class="btn btn-sm btn-primary">Update Picture</button>
    </form>

    <h4 class="text-primary"><?= htmlspecialchars($user['name']) ?></h4>
    <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
    <p><strong>Birthdate:</strong> <?= htmlspecialchars($user['birthdate']) ?></p>
    <p><strong>Gender:</strong> <?= htmlspecialchars($user['gender']) ?></p>
    <p><strong>Posts:</strong> <?= $postCount ?></p>

    <a href="index.php" class="btn btn-outline-secondary mt-3">← Back</a>
    <a href="logout.php" class="btn btn-outline-danger mt-3 ms-2">Log Out</a>
  </div>
</body>
</html>