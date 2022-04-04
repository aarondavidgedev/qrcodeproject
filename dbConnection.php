<?php
$dbServerName = "example.com";
$dbUsername = "exdbuser";
$dbPassword = "exdbpass";
$dbName = "codexworld";

// create connection
$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>