<?php
$server_name = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password (if any)
$db_name = "dpp"; // This should match the name of the database you created

// Create connection
$con = mysqli_connect($server_name, $username, $password, $db_name);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
