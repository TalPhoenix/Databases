<?php
$servername = "104.131.184.230";
$username = "admin_lentz";
$password = "A000999006";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>

