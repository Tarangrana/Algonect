<?php
session_start();
require_once '../includes/db_connect.php'; // adjust this path based on where this file is

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES['profile_pic'])) {
    $userId = $_SESSION['user_id'];
    $file = $_FILES['profile_pic'];
    $fileName = basename($file['name']);
    $uniqueName = uniqid() . '_' . $fileName;
    
    // Save full relative path
    $relativePath = "pics/" . $uniqueName;
    $targetPath = "../" . $relativePath;

    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
        $sql = "UPDATE users_info SET profile_pic = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $relativePath, $userId); // Save full path now

        if ($stmt->execute()) {
            $_SESSION['profile_pic'] = $relativePath; // Keep it consistent
            header("Location: ../profile.php");
            exit;
        } else {
            echo "Error updating profile picture.";
        }

        $stmt->close();
    } else {
        echo "Error uploading image.";
    }
} else {
    echo "Invalid request.";
}
?>
