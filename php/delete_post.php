<?php
session_start();
require_once '../includes/db_connect.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: ../login.php");
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post_id'])) {
  $post_id = $_POST['post_id'];
  $user_id = $_SESSION['user_id'];

  // ✅ Confirm the post belongs to the logged-in user
  $check = $conn->prepare("SELECT id FROM posts WHERE id = ? AND user_id = ?");
  if (!$check) {
    die("Prepare failed: " . $conn->error);
  }
  $check->bind_param("ii", $post_id, $user_id);
  $check->execute();
  $check->store_result();

  if ($check->num_rows > 0) {
    // ✅ Delete associated likes
    $likeStmt = $conn->prepare("DELETE FROM likes WHERE post_id = ?");
    if ($likeStmt) {
      $likeStmt->bind_param("i", $post_id);
      $likeStmt->execute();
      $likeStmt->close();
    }

    // ✅ Delete associated comments
    $commentStmt = $conn->prepare("DELETE FROM comments WHERE post_id = ?");
    if ($commentStmt) {
      $commentStmt->bind_param("i", $post_id);
      $commentStmt->execute();
      $commentStmt->close();
    }

    // ✅ Finally, delete the post itself
    $delete = $conn->prepare("DELETE FROM posts WHERE id = ?");
    if ($delete) {
      $delete->bind_param("i", $post_id);
      $delete->execute();
      $delete->close();
    }
  }

  $check->close();
}

header("Location: ../index.php");
exit;
?>
