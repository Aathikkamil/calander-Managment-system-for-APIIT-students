
<?php
$servername = "localhost";
$username = "Mohamedaathik";
$password = "Kamil119119";
$dbname = "api";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>