<?php
include("admin/config/config.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn,"SELECT * FROM users where user_name='$username'");
if(mysqli_num_rows($sql)>0)
{
    echo "Username Already Exists"; 
	exit;
}
else
{
     $sequel = "INSERT INTO users (user_name, password ) VALUES ('$username', '$password')";

     mysqli_query($conn, $sequel);
     header("location:index.php");
}

?>