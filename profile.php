<?php
session_start();
require_once 'includes\db_connect.php';

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
      margin: 60px auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body style="background-color:#f0f2f5;">
  <div class="profile-box">
  <form action="php/update_profile_pic.php" method="POST" enctype="multipart/form-data">
  <label for="profile_pic" class="form-label">Update Profile Picture:</label>
  <input type="file" name="profile_pic" class="form-control mb-2" accept="image/*" required>
  <button type="submit" class="btn btn-primary">Upload</button>
</form>

    <h3 class="text-primary mb-4">👤 <?= htmlspecialchars($user['name']) ?>'s Profile</h3>
    <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
    <p><strong>Birthdate:</strong> <?= htmlspecialchars($user['birthdate']) ?></p>
    <p><strong>Gender:</strong> <?= htmlspecialchars($user['gender']) ?></p>
    <a href="index.php" class="btn btn-secondary mt-3">← Back to Home</a>
    <a href="logout.php" class="btn btn-danger mt-3 float-end">Log Out</a>

  </div>
</body>
</html>
