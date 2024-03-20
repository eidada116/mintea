<?php
session_start();

if (!isset($_SESSION['uname'])) {
    header("Location: logine.php");
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
    <style>
        .contain{
         margin: auto;
        width:50%;
        padding: 10px;
        background-image: linear-gradient(pink, #f0e2dd);
        border:#683d39 5px dashed;
        overflow: hidden;
    }   
        #photo{
            margin:auto;
            border-radius:50%;
            width:200px;
            height:200px
        }
    </style>
</head>
<body>
    

<div class="cart-icon">
    <a href="cart.html"><img src="images/cart_logo.png" alt="Shopping Cart"></a>
    <div class="cart-count" id="cartCount">0</div>
</div>

<div class="cart-overlay" id="cartOverlay">
    <div class="cart-content">
        <h3>Shopping Cart</h3>
        <ul id="cartItems">
        </ul>
    </div>
</div>

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


<div class="contain">
    <h1 id="hello">Hello, <?php echo $_SESSION['uname']; ?>!</h1>

    <img src="images/doublechoco.jpg" id="photo">
    <p style="text-align:center; font-size:20px"><?php echo$_SESSION['uname']; ?></p>
</div>


</body>
</html>
