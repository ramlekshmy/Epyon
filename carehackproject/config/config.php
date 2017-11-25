<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
$db = mysqli_select_db($conn, "epyon");

// Check connection
if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
} 
?>