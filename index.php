<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>tailor</title>
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
                                  <a href="index.php" class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-green-400 md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Home</a>
                                  <a href="products.php" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-green-400 lg:mx-3 md:text-center">Products</a>
                                  <a href="contact.php" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-green-400 lg:mx-3 md:text-center">Contact</a>
                                  <a href="about.php" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-green-400 lg:mx-3 md:text-center">About us</a>
                              </div>
                              <div class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                                  <a href="#" class="w-full px-6 py-2 mr-0 text-gray-700 md:px-0 lg:pl-2 md:mr-4 lg:mr-5 md:w-auto">Sign In</a>
                                  <a href="#_" class="inline-flex items-center w-full px-6 py-3 text-sm font-medium leading-4 text-white bg-green-400 md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-green-300 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-green-400">Sign Up</a>
                              </div>
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
      
              <!-- Main Hero Content -->
              <div class="container max-w-lg px-4 py-32 mx-auto text-left md:max-w-none md:text-center">
                  <h1 class="text-5xl font-extrabold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:leading-none md:text-6xl lg:text-7xl"><span class="inline md:block">Choose Your Style</span> <span class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-green-400 to-green-300 md:inline-block">Shop in Ms.tailor</span></h1>
                  <div class="mx-auto mt-5 text-gray-500 md:mt-12 md:max-w-lg md:text-center lg:text-lg">Shirt, pants, blazer or anything you want is here </div>
                  <div class="flex flex-col items-center mt-12 text-center">
                      <span class="relative inline-flex w-full md:w-auto">
                          <a href="#_" type="button" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold leading-6 text-white bg-green-400 border border-transparent rounded-full md:w-auto hover:bg-green-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400">
                              Browse Products
                          </a>
                      </span>
                  </div>
              </div>
              <!-- End Main Hero Content -->
      
          </div>
     </section>
      
     <section class="bg-white">
          <div class="w-full px-5 py-6 mx-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16 max-w-7xl">
      
              <div class="flex flex-col items-center sm:px-5 md:flex-row">
                  <div class="w-full md:w-1/2">
                      <a href="#_" class="block">
                          <img class="object-cover w-full h-full rounded-lg max-h-64 sm:max-h-96" src="style/images/tailor.jpg">
                      </a>
                  </div>
                  <div class="flex flex-col items-start justify-center w-full h-full py-6 mb-6 md:mb-0 md:w-1/2">
                      <div class="flex flex-col items-start justify-center h-full space-y-3 transform md:pl-10 lg:pl-16 md:space-y-5">
                          <div class="bg-pink-500 flex items-center pl-2 pr-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                              <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                              <span>Our Story</span>
                          </div>
                          <h1 class="text-4xl font-bold leading-none lg:text-5xl xl:text-6xl"><a href="#_">Premium clothes. Sweet Designs.</a></h1>
                          <p class="pt-2 text-base font-medium"><a href="#_" class="mr-1 underline">About Us</a></p>
                      </div>
                  </div>
              </div>
      
              <div class="flex grid grid-cols-12 pb-10 sm:px-5 gap-x-8 gap-y-16">
                    <?php include ("admin/config/config.php") ;
                    $result = mysqli_query($conn, "SELECT * FROM products ORDER BY products.created_date DESC LIMIT 6 ");
                    ?>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                         <div class="flex flex-col col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                    <div class="max-w-lg bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 h-90 w-80">
                         <div class="">
                         <a href="#" class="">
                              <img class="mb-2 rounded-t-lg min-h-40 max-h-48 w-full" src="admin/covers/<?php echo $row['cover'] ?>" alt="product image">
                         </a>
                         </div>
                         <div class="px-2 py-2 h-24">
                             <a href="#">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white mb-4"><?php echo $row['product_name'] ?></h5>
                              </a>
                              <div class="flex justify-between items-center">
                                   <span class="text-2xl font-medium text-gray-900 dark:text-white"><?php echo $row['price'] ?></span>
                                   <a href="#" class="text-green-600 text-xl hover:text-green-800 font-medium rounded-lg text-center  ">Add to cart</a>
                              </div>
                         </div>
                    </div>
                  </div>
                    <?php endwhile; ?>
      
              </div>
          </div>
     </section>
      
     <section class="text-gray-700 bg-white body-font">
          <div class="container flex flex-col items-center px-8 py-8 mx-auto max-w-7xl sm:flex-row">
              <a href="#_" class="text-xl font-black leading-none text-gray-900 select-none logo">tails<span class="text-indigo-600">.</span></a>
              <p class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l sm:border-gray-200 sm:mt-0">© 2021 Ms.tailor
              </p>
              <span class="inline-flex justify-center mt-4 space-x-5 sm:ml-auto sm:mt-0 sm:justify-start">
                  <a href="#" class="text-gray-400 hover:text-gray-500">
                      Home
                  </a>
      
                  <a href="#" class="text-gray-400 hover:text-gray-500">
                    Products
                  </a>
      
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    About
                </a>
      
              </span>
          </div>
     </section>
      
      <!-- AlpineJS Library -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>
</body>
</html>