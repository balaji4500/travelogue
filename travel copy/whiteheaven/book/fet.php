<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM `whiteheaven` WHERE 0";

if ($conn->query($sql) === TRUE) {
  echo "<script> alert('order cancelled successfully')</script>";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>