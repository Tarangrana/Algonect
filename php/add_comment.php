<?php
session_start(); // Start the session to access session variables
require_once '../includes/db_connect.php';


// Check if the user is logged in
// If not, redirect to the login page
if (!isset($_SESSION['user_id'])) {
  header("Location: ../login.php");
  exit;
}

// Grabbing the form data
$post_id = $_POST['post_id'];
$content = trim($_POST['content']);
$user_id = $_SESSION['user_id'];

//If the content is not empty, insert the comment into the database
if ($content) {
  $stmt = $conn->prepare("INSERT INTO comments (post_id, user_id, content) VALUES (?, ?, ?)");
  $stmt->bind_param("iis", $post_id, $user_id, $content);
  $stmt->execute();
  $stmt->close();
}


// Redirect back to the home page after adding the comment
header("Location: ../index.php");
exit;
?>
