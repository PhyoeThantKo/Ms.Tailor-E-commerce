<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Orders</title>
     <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<nav class="bg-white shadow dark:bg-gray-800 mb-10">
        <div class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
            <a href="index.php" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-200 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Products</a>

            <a href="orders.php" class="text-gray-800 transition-colors duration-200 transform dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6">Orders</a>

            <a href="users.php" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-200 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Users</a>

            <a href="new-product.php" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-200 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Add new product</a>

        </div>
</nav>


<div class="container flex flex-col mx-auto w-full items-center justify-center bg-white dark:bg-gray-800 rounded-lg shadow">

    <ul class="flex flex-col divide divide-y">
    <li class="flex flex-row">
            <div class="select-none cursor-pointer flex flex-1 items-center p-4">
                <div class="flex-1 pl-1 mr-16">
                    <div class="font-medium dark:text-white">
                        Name
                    </div>
                </div>
            </div>
            <div class="select-none cursor-pointer flex flex-1 items-center p-4">
                <div class="flex-1 pl-1 mr-16">
                    <div class="font-medium dark:text-white">
                        Email
                    </div>
                </div>
            </div>
            <div class="select-none cursor-pointer flex flex-1 items-center p-4">
                <div class="flex-1 pl-1 mr-16">
                    <div class="font-medium dark:text-white">
                        Address
                    </div>
                </div>
            </div>
            <div class="select-none cursor-pointer flex flex-1 items-center p-4">
                <div class="flex-1 pl-1 mr-16">
                    <div class="font-medium dark:text-white">
                        Ordered Items
                    </div>
                </div>
            </div>
        </li>
    <?php include('config/config.php');
$users = mysqli_query($conn, "SELECT * FROM orders");

while($user = mysqli_fetch_assoc($users)):
?>
        <li class="flex flex-row">
            <div class="select-none cursor-pointer flex flex-1 items-center p-4">
                <div class="flex-1 pl-1 mr-16">
                    <div class="font-medium dark:text-white">
                        <?php echo $user['name'] ?>
                    </div>
                </div>
            </div>
            <div class="select-none cursor-pointer flex flex-1 items-center p-4">
                <div class="flex-1 pl-1 mr-16">
                    <div class="font-medium dark:text-white">
                        <?php echo $user['email'] ?>
                    </div>
                </div>
            </div>
            <div class="select-none cursor-pointer flex flex-1 items-center p-4">
                <div class="flex-1 pl-1 mr-16">
                    <div class="font-medium dark:text-white">
                        <?php echo $user['address'] ?>
                    </div>
                </div>
            </div>
            <div class="select-none cursor-pointer flex flex-1 items-center p-4">
            <?php $order_id= $user['id'];
                $items = mysqli_query($conn, "SELECT order_items.*, products.product_name FROM order_items LEFT JOIN products ON order_items.product_id = products.id WHERE order_items.order_id = $order_id");

                while($item = mysqli_fetch_assoc($items)):
            ?>
                <div class="flex-1 pl-1 mr-16">
                    <div class="font-medium dark:text-white">
                        <?php echo $item['product_name']."/";
                        echo "  Quantity =". $item['qty'];
                        ?>

                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        </li>
<?php endwhile; ?>
    </ul>
</div>
</body>
</html>