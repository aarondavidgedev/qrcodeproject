<?php
$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "password";
$dbName = "testdb";

// create connection
$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "\n";
echo "You've SUCCESSFULLY connected to your SQL database.\n";
echo "The current date is: "; echo date('Y/m/d'); echo("\n"); 
echo "Your connection details are: \n";
echo "\n";
echo "Server Name: $dbServerName \n";
echo "Username: $dbUsername \n";
echo "Password: $dbpassword \n";
echo "Database Name: $dbName \n";
?>