<?php
     session_start();
     include('admin/config/config.php');

     $name = $_POST['name'];
     $email = $_POST['email'];
     $address = $_POST['address'];

     mysqli_query($conn, "INSERT INTO orders (name, email, address) VALUES ('$name', '$email','$address') ");

     $order_id = mysqli_insert_id($conn);

     foreach($_SESSION['cart'] as $id => $qty) {
          mysqli_query($conn, "INSERT INTO order_items (product_id, order_id, qty) VALUES ('$id','$order_id','$qty')");
     }

     unset($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dialog</title>
</head>
<body>
<h1>Order Submitted</h1>
     <div class="msg">
          Your order has been submitted. We'll deliver the items soon. <a href="index.php" class="done">Book Store Home</a>
     </div>
</body>
</html>