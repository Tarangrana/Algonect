<?php
session_start();
require_once '../includes/db_connect.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: ../login.php");
  exit;
}

$post_id = $_POST['post_id'];
$user_id = $_SESSION['user_id'];

// Prevent duplicate likes
$stmt = $conn->prepare("SELECT id FROM likes WHERE post_id = ? AND user_id = ?");
$stmt->bind_param("ii", $post_id, $user_id);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
  $stmt = $conn->prepare("INSERT INTO likes (post_id, user_id) VALUES (?, ?)");
  $stmt->bind_param("ii", $post_id, $user_id);
  $stmt->execute();
}
$stmt->close();

header("Location: ../index.php");
exit;
?>
