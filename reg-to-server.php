<?php
include("admin/config/config.php");

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$sql = mysqli_query($conn,"SELECT * FROM users where user_name='$username'");
if(mysqli_num_rows($sql)>0)
{
    echo "Username Already Exists"; 
	exit;
}
else
{
     $sequel = "INSERT INTO users (user_name, email, password ) VALUES ('$username', '$email', '$password')";

     mysqli_query($conn, $sequel);
     header("location:index.php");
}

?>