<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE Indonesia";
if ($conn->query($sql) === TRUE) {
  echo "Database Berhasil Dibuat";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>