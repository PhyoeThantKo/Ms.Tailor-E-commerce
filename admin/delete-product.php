<?php
     include("config/config.php");

     $product_name = $_GET['product_name'];
     echo"$product_name";
     $sql = "DELETE FROM products WHERE product_name= '$product_name'";

     mysqli_query($conn, $sql);
     header("location: index.php");
?>