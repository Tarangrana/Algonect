<?php
session_start();
require_once '../includes/db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_id = $_SESSION['user_id'];
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $tag = $_POST['tag'];

    if ($title && $content && $tag) {
        $stmt = $conn->prepare("INSERT INTO posts (user_id, title, content, tag) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $user_id, $title, $content, $tag);

        if ($stmt->execute()) {
            header("Location: ../index.php");
            exit;
        } else {
            echo "Error while saving post.";
        }

        $stmt->close();
    } else {
        echo "Missing fields.";
    }

    $conn->close();
}
?>
