<?php

$con = mysqli_connect('localhost', 'root', '', 'minitea');


$uname = $_POST['uname'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$email = $_POST['email'];


$check_query = "SELECT * FROM `profile` WHERE `uname` = '$uname'";
$result = mysqli_query($con, $check_query);

if (mysqli_num_rows($result) > 0) {
    echo '<script>alert("Username already exists!"); window.location="signup.html";</script>';
    exit(); 
}

$sql = "INSERT INTO `profile` (`uname`, `password`, `firstname`, `lastname`, `mobile`, `address`, `email`) VALUES ('$uname', '$password', '$firstname', '$lastname', '$mobile', '$address', '$email')";

$rs = mysqli_query($con, $sql);

if ($rs) {
    echo '<script>alert("Sign in Successful!"); window.location="login.html";</script>';
    exit(); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
