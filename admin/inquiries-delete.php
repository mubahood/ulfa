<?php
/**
 * Inquiries - Delete
 */
require_once 'config/auth.php';
require_once 'config/crud-helper.php';

requireAdmin();
checkSessionTimeout();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if (!$id) {
    $_SESSION['alert'] = ['type' => 'error', 'message' => 'Invalid inquiry ID.'];
    header('Location: inquiries.php');
    exit;
}

// Delete the inquiry
$result = deleteRecord('contact_inquiries', $id);

if ($result) {
    $_SESSION['alert'] = ['type' => 'success', 'message' => 'Inquiry deleted successfully.'];
} else {
    $_SESSION['alert'] = ['type' => 'error', 'message' => 'Failed to delete inquiry.'];
}

header('Location: inquiries.php');
exit;
