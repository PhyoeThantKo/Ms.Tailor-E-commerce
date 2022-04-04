<?php
     session_start();
     include('admin/config/config.php');

     $email = $_POST['email'];
     $password = $_POST['password'];

     $sql = mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password'");
     $row = mysqli_fetch_assoc($sql);

     if(is_array($row))
    {
        $_SESSION["auth"] = true;
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"]=$row['user_name'];
        header("Location: index.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }

?>