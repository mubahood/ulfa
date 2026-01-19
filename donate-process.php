<?php
require_once 'config.php';
require_once 'functions.php';
require_once 'includes/pesapal-config.php';

// Check if donation data exists in session
if (!isset($_SESSION['pending_donation'])) {
    header('Location: donate.php');
    exit;
}

$donation_data = $_SESSION['pending_donation'];

try {
    // Insert donation into database
    $stmt = $pdo->prepare("
        INSERT INTO donations (
            donor_name, donor_email, donor_phone,
            amount, currency, cause_id, message, is_anonymous,
            pesapal_merchant_reference, payment_status,
            ip_address, user_agent
        ) VALUES (
            ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
        )
    ");
    
    $donor_name = $donation_data['first_name'] . ' ' . $donation_data['last_name'];
    
    $stmt->execute([
        $donor_name,
        $donation_data['email'],
        $donation_data['phone'] ?? null,
        $donation_data['amount'],
        'UGX',
        $donation_data['cause_id'],
        $donation_data['message'] ?? null,
        $donation_data['is_anonymous'],
        $donation_data['merchant_reference'],
        'pending',
        $_SERVER['REMOTE_ADDR'] ?? null,
        $_SERVER['HTTP_USER_AGENT'] ?? null
    ]);
    
    $donation_id = $pdo->lastInsertId();
    
    // Store donation ID in session
    $_SESSION['donation_id'] = $donation_id;
    
    // Prepare data for Pesapal
    $pesapal_data = [
        'amount' => $donation_data['amount'],
        'merchant_reference' => $donation_data['merchant_reference'],
        'first_name' => $donation_data['first_name'],
        'last_name' => $donation_data['last_name'],
        'email' => $donation_data['email'],
        'phone' => $donation_data['phone'] ?? '',
        'cause_name' => $donation_data['cause_title']
    ];
    
    // Generate Pesapal payment URL
    $payment_url = generatePesapalPaymentURL($pesapal_data);
    
    // Store payment URL in session
    $_SESSION['payment_url'] = $payment_url;
    
    // Redirect to payment iframe page
    header('Location: donate-payment.php');
    exit;
    
} catch (Exception $e) {
    error_log("Donation processing error: " . $e->getMessage());
    $_SESSION['error'] = 'An error occurred while processing your donation. Please try again.';
    header('Location: donate.php');
    exit;
}
