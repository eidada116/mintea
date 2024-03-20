<?php
$con = mysqli_connect('localhost', 'root', '', 'minitea');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "minitea";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
include 'db_connection.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div id="snackOne">';
        echo '<img id="p" src="images/' . strtolower(str_replace(' ', '', $row['name'])) . '.jpg"><br>';
        echo '<span>' . $row['name'] . '</span>';
        echo '<p><strong>' . $row['price'] . ' Php</strong></p>';
        echo '<button>Add to Cart</button>';
        echo '</div>';
    }
} else {
    echo "0 results";
}
$conn->close();


?>
