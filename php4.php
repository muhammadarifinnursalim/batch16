<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "indonesia";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE provinsi2 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama_provinsi VARCHAR(30) NOT NULL,
ibukota_provinsi VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Berhasil Dibuat";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>