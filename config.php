<?php
// config.php
// Include Composer's autoloader (make sure you've run "composer require mongodb/mongodb" locally)
require 'vendor/autoload.php';

use MongoDB\Client;

// Retrieve the MongoDB connection string from an environment variable (set in Railway)
$mongoUri = getenv("MONGODB_URI");

// Create a new MongoDB client instance
$client = new Client($mongoUri);

// Select the database (change "discordbotdb" if needed)
$db = $client->selectDatabase("discordbotdb");
?>
