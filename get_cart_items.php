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

// Fetch cart items from the database
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);

$cartItems = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Add each cart item to the array
        $cartItems[] = array(
            "productName" => $row['productName'],
            "productPrice" => $row['productPrice']
        );
    }
}

// Return cart items as JSON response
echo json_encode($cartItems);

$conn->close();
?>
