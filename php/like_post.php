<?php
session_start();
require_once '../includes/db_connect.php';

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false]);
    exit;
}

if (!isset($_POST['post_id'])) {
    echo json_encode(['success' => false]);
    exit;
}

$post_id = (int)$_POST['post_id'];
$user_id = (int)$_SESSION['user_id'];

// Check if already liked
$check = $conn->prepare("SELECT id FROM likes WHERE post_id = ? AND user_id = ?");
$check->bind_param("ii", $post_id, $user_id);
$check->execute();
$check->store_result();

if ($check->num_rows === 0) {
    $insert = $conn->prepare("INSERT INTO likes (post_id, user_id) VALUES (?, ?)");
    $insert->bind_param("ii", $post_id, $user_id);
    $insert->execute();
    $insert->close();
}

$check->close();

// Get updated count
$count = $conn->prepare("SELECT COUNT(*) FROM likes WHERE post_id = ?");
$count->bind_param("i", $post_id);
$count->execute();
$count->bind_result($likeCount);
$count->fetch();
$count->close();

echo json_encode(['success' => true, 'likes' => $likeCount]);
