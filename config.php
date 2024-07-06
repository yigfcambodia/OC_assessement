<?php
$servername = "localhost";
$username = "root";
$password = "";
$port = "3308";
$dbname = "landing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>