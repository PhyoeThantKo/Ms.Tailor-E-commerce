<?php
    include("config/config.php");

    $name = $_POST['name'];
    $price = $_POST['price'];
    $cover = $_FILES['cover']['name'];
    $tmp = $_FILES['cover']['tmp_name'];

    if (move_uploaded_file($tmp, "covers/".$cover)) {
      echo "File is valid, and was successfully uploaded.\n";
  } else {
      echo "Possible file upload attack!\n";
      
  }

  $sql = "INSERT INTO products (product_name, cover, price, created_date, modified_date ) VALUES ('$name',  '$cover','$price', now(), now() )";

  mysqli_query($conn, $sql);
  header("location:index.php");

?>