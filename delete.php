<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id parameter value from URL
$id = $_GET['id'];

// Penghapusan Data
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id = $id");

// Redirect ke halaman utama
header("Location:php5.php");