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

// Get data from POST request
$productID = $_POST['productID'];
$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];

// Insert item into cart table
$sql = "INSERT INTO cart (productID, productName, productPrice) VALUES ('$productID', '$productName', '$productPrice')";

if ($conn->query($sql) === TRUE) {
    echo "Item added to cart successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
