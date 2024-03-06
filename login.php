<?php

$con = mysqli_connect('localhost', 'root', '', 'minitea');

$uname = $_POST['uname'];
$password = $_POST['password'];

$check_query = "SELECT * FROM `profile` WHERE `uname` = '$uname' AND `password` = '$password'";
$result = mysqli_query($con, $check_query);

if (mysqli_num_rows($result) > 0) {
    echo '<script>alert("Login Successful!"); window.location="index.html";</script>';
    exit();
} else {
    echo '<script>alert("Invalid username or password!"); window.location="login.html";</script>';
    exit();
}

mysqli_close($con);
?>
