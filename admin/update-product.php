<?php
     include("config/config.php");

     $id = $_POST['id'];
     $name = $_POST['name'];
     $price = $_POST['price'];
     $cover = $_FILES['cover']['name'];
     $tmp = $_FILES['cover']['tmp_name'];
     if($cover) {
          move_uploaded_file($tmp, "covers/".$cover);
          $sql = "UPDATE products SET product_name='$name', cover='$cover', price='$price', modified_date=now() WHERE id = $id";
     } else {
          $sql = "UPDATE products SET product_name='$name', price='$price', modified_date=now() WHERE id = $id";
     }

     mysqli_query($conn, $sql);
     header("location:index.php");
?>