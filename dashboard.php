<?php
session_start();
require 'config.php';

// Check if the user is logged in
if (!isset($_SESSION['discord_id'])) {
    echo "You must log in first. <a href='login.php'>Login</a>";
    exit;
}

$discord_id = $_SESSION['discord_id'];

// Access the users collection
$usersCollection = $db->users;

// Find the user's document (stored as an integer)
$userDoc = $usersCollection->findOne(['_id' => (int)$discord_id]);

$username = $userDoc && isset($userDoc['username']) ? $userDoc['username'] : "Unknown User";
$balance = $userDoc && isset($userDoc['balance']) ? $userDoc['balance'] : 0;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>Your current balance is: <strong><?php echo htmlspecialchars($balance); ?></strong> credits.</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
