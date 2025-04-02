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
    $imagePath = null;

    // Handle image upload if there's a file
    if (!empty($_FILES['post_image']['name'])) {
        $uploadDir = "../post_images/";
        $fileName = time() . "_" . basename($_FILES['post_image']['name']);
        $targetPath = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['post_image']['tmp_name'], $targetPath)) {
            $imagePath = "post_images/" . $fileName;
        }
    }

    if ($title && $content && $tag) {
        $stmt = $conn->prepare("INSERT INTO posts (user_id, title, content, tag, image_path) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issss", $user_id, $title, $content, $tag, $imagePath);

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
