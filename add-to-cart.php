<?php
     session_start();

     if(isset($_SESSION["auth"])) {
          $id = $_GET['id'];
          $_SESSION['cart'][$id]++;
          header("location: index.php#products");
      } else {
          echo 
          'You have to log in first to add items to cart ! <a href="register.php"> Sign Up </a> or <a href="login.php"> Log in </a> Here';
      }

     
?>