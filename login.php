<?php

session_start();

$con = mysqli_connect('localhost', 'root', '', 'minitea');

$uname = $_POST['uname'];
$password = $_POST['password'];

$check_query = "SELECT * FROM `profile` WHERE `uname` = '$uname' AND `password` = '$password'";
$result = mysqli_query($con, $check_query);

if (mysqli_num_rows($result) > 0) {
    $user_data = mysqli_fetch_assoc($result);
    
    $_SESSION['uname'] = $user_data['uname'];
    
    header("Location: welcome.php");
    exit();
} else {
    echo '<script>alert("Invalid username or password!"); window.location="logine.php";</script>';
    exit();
}

mysqli_close($con);
?>
