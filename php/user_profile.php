<?php

session_start();
require_once '../includes/db_connect.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$user_id = (int)$_GET['id'];

$stmt = $conn->prepare("SELECT * FROM users_info WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "User not found.";
    exit;
}

$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
  <title><?= htmlspecialchars($user['name']) ?>'s Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body style="background:#f5f5f5">
  <div class="container mt-5">
    <div class="bg-white p-4 rounded shadow" style="max-width: 600px; margin: auto;">
      <div class="d-flex align-items-center mb-3">
        
      <?php
$picPath = (!empty($user['profile_pic']))
  ? '../' . $user['profile_pic']
  : '../pics/default-pfp.png';
?>
<img src="<?= $picPath ?>" 
     class="rounded-circle me-3" 
     width="60" height="60" 
     alt="Profile Picture"
     onerror="this.src='../pics/default-pfp.png'" />



        <h4 class="m-0"><?= htmlspecialchars($user['name']) ?></h4>
      </div>
      <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
      <p><strong>Birthdate:</strong> <?= htmlspecialchars($user['birthdate']) ?></p>
      <p><strong>Gender:</strong> <?= htmlspecialchars($user['gender']) ?></p>
      <a href="../index.php" class="btn btn-secondary mt-3">← Back to Home</a>
    </div>
  </div>
</body>
</html>
