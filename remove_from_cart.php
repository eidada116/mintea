<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "minitea";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$productName = $_POST['productName'];

$sql = "DELETE FROM cart WHERE productName = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $productName);
$stmt->execute();
$stmt->close();

$conn->close();
?>
