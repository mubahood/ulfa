<?php
/**
 * News Blog Management - Delete Post
 */
require_once 'config/auth.php';
require_once 'config/crud-helper.php';

// Check authentication
requireAdmin();
checkSessionTimeout();

// Get post ID
$postId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if (!$postId) {
    header('Location: news.php');
    exit;
}

// Get post data
$post = getRecordById('news_posts', $postId);

if (!$post) {
    $_SESSION['alert'] = ['type' => 'danger', 'message' => 'Post not found'];
    header('Location: news.php');
    exit;
}

// Delete featured image if exists
if ($post['featured_image']) {
    deleteUploadedFile('../uploads/' . $post['featured_image']);
}

// Delete post
$deleted = deleteRecord('news_posts', $postId);

if ($deleted) {
    logAdminActivity('delete', 'news_posts', $postId);
    $_SESSION['alert'] = ['type' => 'success', 'message' => 'Post deleted successfully'];
} else {
    $_SESSION['alert'] = ['type' => 'danger', 'message' => 'Failed to delete post'];
}

header('Location: news.php');
exit;
