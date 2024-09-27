<?php
$servername = "localhost"; // Replace with your server name or IP
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "food"; // Replace with your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>
