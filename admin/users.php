<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Add New Product</title>
     <link rel="stylesheet" href="../style/style.css">
</head>
<body>

<nav class="bg-white shadow dark:bg-gray-800">
        <div class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
            <a href="index.php" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-200 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Products</a>

            <a href="orders.php" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-200 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Orders</a>

            <a href="users.php" class="text-gray-800 transition-colors duration-200 transform dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6">Users</a>

            <a href="new-product.php" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-200 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Add new product</a>

        </div>
</nav>

<div class="font-semibold text-3xl flex justify-center items-center mt-8">
    <div>Here are the registered users.</div>
</div>

<div class="container flex flex-col mx-auto w-full items-center justify-center bg-white dark:bg-gray-800 rounded-lg  mt-8">

    <ul class="flex flex-col divide divide-y">

    <li class="flex flex-row">
            <div class="select-none cursor-pointer flex flex-1 items-center p-4">
                <div class="font-medium flex-1 pl-1 mr-16">
                    User Names
                </div>
                <div class="flex-1 pl-1 mr-16">
                    <div class="font-medium dark:text-white">
                        Emails
                    </div>
                </div>
            </div>
        </li>

    <?php include('config/config.php');
$users = mysqli_query($conn, "SELECT * FROM users");

while($user = mysqli_fetch_assoc($users)):
?>
        <li class="flex flex-row">
            <div class="select-none cursor-pointer flex flex-1 items-center p-4">
                <div class="flex-1 pl-1 mr-16">
                    <div class="font-medium dark:text-white">
                        <?php echo $user['user_name'] ?>
                    </div>
                </div>
                <div class="flex-1 pl-1 mr-16">
                    <div class="font-medium dark:text-white">
                        <?php echo $user['email'] ?>
                    </div>
                </div>
            </div>
        </li>
<?php endwhile; ?>
    </ul>
</div>

</body>
</html>