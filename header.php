<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel ="stylesheet" href = "style.css">
 <link rel ="stylesheet" href = "store.css">

 <title>Document</title>
</head>
<body>
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
  <a href="main.php">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact Us</a>
    <a href="store.php">Store</a>
    <?php
 $count=0;
 if(isset($_SESSION['cart'])){
  $count=count($_SESSION['cart']);
 }
 ?>

  <a href="mycart.php">My Cart(<?php echo $count;?>)</a>
  <a href="#wishlist">Wishlist</a>
  <a  href="login_form.php" >LogIn</a>
  <a href="#" class="shake-animation">Under Construction</a>
  <a href="#" class="shake-animation">Under Construction</a>
</div>

<div class ="searchbar">
 <input type="text" id ="search-item" name="" placeholder =" Search.." onkeyup="search()">
 <!-- <button id="search" onClick="searchItems()"> <img src="./images/search-icon.svg" alt=""></button> -->
</div>

<!-- NAVBAR LINKS START -->
<div class= "navbar-links">
<ul>
<div class="homeHover">
   <a href="main.php" class ="homeButton">Home</a> 
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
 <li><a href="login_form.php" >login</a></li>

</ul>
</div>
<!-- NAVBAR LINKS ENDS  -->
 </nav>
<script>
  const searchFun =() =>{
  let filter = document.getElementById('searchBox');
  let MyDiv = document.getElementById('product');
}
</script>
</body>
</html>