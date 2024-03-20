<?php
session_start();

if (isset($_SESSION['uname'])) {
    header("Location: welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>MINITEA SNACKS</title>
    <link rel="stylesheet" href="loginstyle.css" type="text/css" media="all">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>



<div class="header">
    <h2><span style="color:#75271e">Minitea</span> & Snacks</h2>
    <!--MENU RIBBON-->
    <div class="ribbon">
        <a href="index.html">Home</a>
        <a href="snacks.html">Order</a>
        <a href="contact.html">Contact</a>
        <a href="about.html">About</a>
        <a href="logine.php" style="color:#75271e;">Log in</a>
    </div>
</div>

<div class="login">
  <form action="login.php" method="post"> <!-- Add method="post" to your form -->
    <h1>Welcome Back!</h1>
    <div class="input-box">
      <input type="text" name="uname" placeholder="Username" required> <!-- Add name="uname" -->
      <i class="bx bxs-user"></i>
    </div>
    <div class="input-box">
      <input type="password" name="password" placeholder="Password" required> <!-- Add name="password" -->
      <i class="bx bxs-lock-alt"></i>
    </div>

    <div class="remember">
      <label><input type="checkbox" name="remember">Remember me</label> <!-- Add name="remember" -->
      <span>Don't have an account? <a href="signup.html">Register</a></span>
    </div>

    <button type="submit" class="btn">Login</button>

  </form>
</div>

</body>
</html>
