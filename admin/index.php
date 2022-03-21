<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin Panel</title>
     <link rel="stylesheet" href="../style/style.css">
</head>
<body>
     
    <nav class="bg-white shadow dark:bg-gray-800">
        <div class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
            <a href="#" class="text-gray-800 transition-colors duration-200 transform dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6">Products</a>

            <a href="#" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-200 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Orders</a>

            <a href="#" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-200 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Add new product</a>

        </div>
    </nav>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-10">

          <?php include("config/config.php");

          $result = mysqli_query($conn, "SELECT * FROM products ORDER BY products.created_date DESC");

          ?>

          <?php while ($row = mysqli_fetch_assoc($result)): ?>

               <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto mt-3">
                    <a href="#" class="w-full block h-full">
                         <img alt="blog photo" src="covers/<?php echo $row['cover'] ?>" class="max-h-40 w-full object-cover"/>
                         <div class="bg-white dark:bg-gray-800 w-full p-4">
                              <p class="text-gray-800 dark:text-white text-xl h-20 max-h-20 font-medium mb-2">
                              <?php echo $row['product_name']; ?>
                              </p>
                              <div class="flex flex-wrap justify-starts items-center mt-4">
                                   <a href="post-edit.php?post_id=<?php echo $row['post_id'] ?>" class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-pink-100 hover:bg-pink-200 rounded-2xl">
                                             Edit
                                   </a>
                                   <a href="delete-product.php?product_name=<?php echo $row['product_name'] ?>" class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-pink-100 hover:bg-pink-200 rounded-2xl">
                                             Delete
                                   </a>
                              </div>
                         </div>
                    </a>
               </div>

          <?php endwhile; ?>
 
     </div>
</body>
</html>