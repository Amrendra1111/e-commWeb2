


<?php

@include 'config.php';

session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <link rel ="stylesheet" href = "style.css">
 <!-- <link rel ="stylesheet" href = "store.css"> -->

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="style.css"> -->
   <!-- <link rel="stylesheet" href="login_form.css"> -->
   <link rel="stylesheet" href="user_page.css">
 <!-- NAVBAR STARTS -->
 
 <nav class ="navbar">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <div class ="logo">
<img src="./images/logo.png" alt="">
<h3 class ="brand-name"><span>Opus</span>&nbsp;Corporation</h3></div>


<a href="#" class="toggle-button" onclick="openNav()">
  <span class="bar"></span>
  <span class="bar"></span>
  <span class="bar"></span>
</a>



<div id="myNavbar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact Us</a>

  <a href="mycart.php">My Cart</a>
  <a href="#wishlist">Wishlist</a>
  <a href="login_form.php" id="login">LogIn</a>
  <a href="#" class="shake-animation">Under Construction</a>
  <a href="#" class="shake-animation">Under Construction</a>
</div>

<div class ="searchbar">
 <input type="text" placeholder =" Search..">
 <img src="./images/search-icon.svg" alt="">
</div>

<!-- NAVBAR LINKS START -->
<div class= "navbar-links">
<ul>
<div class="homeHover">
  <button type ="button" class ="homeButton"> <a href="main.php">Home</a> </button>
  <div class="dropdown-content">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact Us</a>
  <a href="#" class="shake-animation">Under Construction</a>
  <a href="#" class="shake-animation">Under Construction</a>
  <a href="#" class="shake-animation">Under Construction</a>
  </div>
  </div>
 <!-- <li><a href="#home">home <span class ="arrow">&#9660;</span></a></li> -->
 <li><a href="store.php">store</a></li>
 <li><a href="wishlist.php">wishlist</a></li>
 <?php
 $count=0;
 if(isset($_SESSION['cart'])){
  $count=count($_SESSION['cart']);
 }
 ?>
 <li><a href="mycart.php">My Cart(<?php echo $count;?>)</a></li>
 <li><a href="login_form.php" id="login">login</a></li>

</ul>
</div>
<!-- NAVBAR LINKS ENDS  -->
 </nav>
</head>
<body>

   
<div class="container">

   <div class="content">
      <img src="./images/profile.svg" width= 130px fill=#333; alt="">
      <!-- <h3>hi, <span>user</span></h3> -->
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Do you want to logout?</p>
      <!-- <a href="login_form.php" class="btn">login</a> -->
      <!-- <a href="register_form.php" class="btn">register</a> -->
      <a class="btn1" href="logout.php" class="btn1">logout</a>
   </div>

</div>
<script src="index.js"></script>
</body>
</html>