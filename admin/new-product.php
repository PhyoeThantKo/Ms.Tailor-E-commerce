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

            <a href="new-product.php" class="text-gray-800 transition-colors duration-200 transform dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6">Add new product</a>

        </div>
    </nav>
     
<div class="w-full">

<form action="add-product.php" method="POST" enctype="multipart/form-data" class="flex w-11/12 mx-auto max-w-sm space-x-3">
    <div class="w-full max-w-2xl px-5 py-10 m-auto mt-10 bg-white rounded-lg shadow dark:bg-gray-800">
        <div class="mb-6 text-3xl font-light text-center text-gray-800 dark:text-white">
            Add New Product
        </div>
        <div class="grid max-w-xl grid-cols-2 gap-4 m-auto">
            <div class="col-span-2 lg:col-span-1">
                <div class=" relative ">
                    <input type="text" id="name" name="name" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Name"/>
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1">
                    <div class=" relative ">
                        <input type="text" id="price" name="price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Price"/>
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
                         Add product
                    </button>
               </div>
          </div>
     </div>
</form>
</div>

</body>
</html>