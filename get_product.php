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

// Fetch product details based on productID received from the AJAX request
$productID = $_GET['productID'];

$sql = "SELECT * FROM products WHERE productID = $productID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Return product details as JSON
    echo json_encode($row);
} else {
    echo "Product not found";
}

$conn->close();
?>
