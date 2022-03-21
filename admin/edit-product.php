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
<?php
          include("config/config.php");

          $product_name = $_GET['product_name'];
          $result = mysqli_query( $conn, "SELECT * FROM products WHERE product_name= '$product_name'");
          $row = mysqli_fetch_assoc($result);
          
     ?>
     
<div class="w-full">

<form action="update-product.php" method="POST" enctype="multipart/form-data" class="flex w-11/12 mx-auto max-w-sm space-x-3">
    <div class="w-full max-w-2xl px-5 py-10 m-auto mt-10 bg-white rounded-lg shadow dark:bg-gray-800">
        <div class="mb-6 text-3xl font-light text-center text-gray-800 dark:text-white">
            Edit Product
        </div>
        <div class="grid max-w-xl grid-cols-2 gap-4 m-auto">
            <div class="col-span-2 lg:col-span-1">
                <div class=" relative ">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

                    <input type="text" id="name" name="name" value="<?php echo ($row['product_name']) ?>" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Name"/>
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1">
                    <div class=" relative ">
                        <input type="text" id="price" name="price" value="<?php echo ($row['price']) ?>" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Price"/>
                    </div>
               </div>
               <div class="col-span-2">
                    <label for="cover" class="text-gray-700 mr-3">
                         Choose cover
                    </label>

                    <input name="cover" id="cover" type="file" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"> 
               </div>
               <div class="col-span-2 text-right">
                    <button type="submit" class="py-2 px-4  bg-green-600 hover:bg-green-700 focus:ring-green-500 focus:ring-offset-green-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                         Update product
                    </button>
               </div>
          </div>
     </div>
</form>
</div>

</body>
</html>