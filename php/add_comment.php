<?php
session_start();
require_once '../includes/db_connect.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: ../login.php");
  exit;
}

$post_id = $_POST['post_id'];
$content = trim($_POST['content']);
$user_id = $_SESSION['user_id'];

if ($content) {
  $stmt = $conn->prepare("INSERT INTO comments (post_id, user_id, content) VALUES (?, ?, ?)");
  $stmt->bind_param("iis", $post_id, $user_id, $content);
  $stmt->execute();
  $stmt->close();
}

header("Location: ../index.php");
exit;
?>
