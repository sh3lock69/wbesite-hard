<?php
session_start();
require 'config.php';

// Get user input
$discord_id = $_POST['discord_id'];
$code = $_POST['code'];

// Access the login_codes collection
$loginCodesCollection = $db->login_codes;

// Look for a document matching the Discord ID (stored as an integer)
$document = $loginCodesCollection->findOne(['_id' => (int)$discord_id]);

if ($document && isset($document['code']) && $document['code'] == $code) {
    // Login successful: set session variable
    $_SESSION['discord_id'] = $discord_id;
    
    // Delete the login code for security
    $loginCodesCollection->deleteOne(['_id' => (int)$discord_id]);
    
    echo "Login successful! <a href='dashboard.php'>Go to Dashboard</a>";
} else {
    echo "Invalid login code. <a href='login.php'>Try Again</a>";
}
?>
