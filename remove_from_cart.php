<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "minitea";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve product name from POST request
$productName = $_POST['productName'];

// Remove item from cart table
$sql = "DELETE FROM cart WHERE productName = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $productName);
$stmt->execute();
$stmt->close();

$conn->close();
?>
