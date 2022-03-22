<?php
     session_start();
     if(!isset($_SESSION['cart'])) {
          header("location: index.php");
          exit();
     }

     include("admin/config/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Your Shopping Cart</title>
     <link rel="stylesheet" href="style/style.css">
</head>
<body>

<section class="w-full px-6 pb-12 antialiased bg-white">
          <div class="mx-auto max-w-7xl">
              <nav class="relative z-50 h-24 select-none" x-data="{ showMenu: false }">
                  <div class="container relative flex flex-wrap items-center justify-between h-24 mx-auto overflow-hidden font-medium border-b border-gray-200 md:overflow-visible lg:justify-center sm:px-4 md:px-2">
                      <div class="flex items-center justify-start w-1/4 h-full pr-4">
                          <a href="#_" class="inline-block py-4 md:py-0">
                              <span class="p-1 text-xl font-black leading-none text-gray-900"><span>Ms.tailor</span><span class="text-green-400">.</span></span>
                          </a>
                      </div>
                      <div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex fixed': showMenu, 'hidden': !showMenu }">
                          <div class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
                              <a href="#_" class="inline-flex items-center block w-auto h-16 px-6 text-xl font-black leading-none text-gray-900 md:hidden">tails<span class="text-green-400">.</span></a>
                              <div class="flex flex-col items-start justify-center w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center">
                                  <a href="index.php" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-green-400 lg:mx-3 md:text-center">Home</a>
                                  <a href="products.php" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-green-400 lg:mx-3 md:text-center">Products</a>
                                  <a href="view-cart.php" class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-green-400 md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Cart</a>
                                  <a href="contact.php" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-green-400 lg:mx-3 md:text-center">Contact</a>
                                  <a href="about.php" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-green-400 lg:mx-3 md:text-center">About us</a>
                              </div>
                              <?php   
                                    if(isset($_SESSION["auth"])) {
                                        echo 
                                        '<div class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0 uppercase">'. 'Hi,' .$_SESSION['username'].'</div>';
                                    } else {
                                        echo 
                                        '<div class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                                        <a href="login.php" class="w-full px-6 py-2 mr-0 text-gray-700 md:px-0 lg:pl-2 md:mr-4 lg:mr-5 md:w-auto">Log In</a>
                                        <a href="register.php" class="inline-flex items-center w-full px-6 py-3 text-sm font-medium leading-4 text-white bg-green-400 md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-green-300 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-green-400">Sign Up</a>
                                        </div>';
                                    } 
                                ?>
                          </div>
                      </div>
                      <div @click="showMenu = !showMenu" class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100">
                          <svg class="w-6 h-6 text-gray-700" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" x-cloak="">
                              <path d="M4 6h16M4 12h16M4 18h16"></path>
                          </svg>
                          <svg class="w-6 h-6 text-gray-700" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" x-cloak="">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                          </svg>
                      </div>
                  </div>
              </nav>
          </div>
     </section>

<div class="flex justify-center items-center mb-10">
<table class="table p-4 bg-white shadow rounded-lg">
    <thead>
        <tr>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                Item
            </th>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                Price
            </th>
            <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                Quantity
            </th>
        </tr>
    </thead>
    <tbody>
          <?php
               $total = 0;
               foreach($_SESSION['cart'] as $id => $qty):
               
               $result = mysqli_query($conn, "SELECT product_name, price FROM products WHERE id=$id");
               $row = mysqli_fetch_assoc($result);
          ?>
        <tr class="text-gray-700">
            <td class="border p-4 dark:border-dark-5">
            <?php echo $row['product_name'] ?>
            </td>
            <td class="border p-4 dark:border-dark-5">
            <?php echo $row['price'] ?>
            </td>
            <td class="border p-4 dark:border-dark-5">
            <?php echo $qty ?>
            </td>
        </tr>
        <?php endforeach; ?>

    </tbody>
</table>
</div>

<div class="flex justify-center items-center">
     <div class="flex flex-col w-full max-w-md px-4 py-8 bg-white rounded-lg shadow dark:bg-gray-800 sm:px-6 md:px-8 lg:px-10">
    <div class="self-center mb-6 text-xl font-light text-gray-600 sm:text-2xl dark:text-white">
        Submit Order
    </div>
    <div class="mt-8">
        <form action="submit-order.php" method="post" autoComplete="off">
            <div class="flex flex-col mb-2">
                <div class="flex relative ">
                    <input type="text" name="name" class=" rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Name"/>
                    </div>
                </div>
                <div class="flex relative mb-2">
                    <input type="text" name="email" class=" rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Email"/>
                    </div>
                </div>
                <div class="flex flex-col mb-6">
                    <div class="flex relative ">
                        <input type="text" name="address" class=" rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Address"/>
                        </div>
                    </div>
                    <div class="flex w-full">
                        <button type="submit" class="py-2 px-4  bg-green-600 hover:bg-green-700 focus:ring-green-500 focus:ring-offset-green-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                            Submit Order
                        </button>
                    </div>
                </form>
            </div>
     </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>

</body>
</html>