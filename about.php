<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>About</title>
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
                                  <a href="contact.php" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-green-400 lg:mx-3 md:text-center">Contact</a>
                                  <a href="about.php" class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-green-400 md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">About us</a>
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
          </div>
     </section>
     
     <div class="bg-lightblue py-20 px-4">
          <div class="mx-auto max-w-6xl flex flex-col md:flex-row">
          <h2 class="mr-8 w-full md:w-1/3 text-3xl font-extrabold leading-9">
               About us
          </h2>
          <dl class="w-full md:w-2/3">
               <dt class="mb-4">
                    <h3 class="text-xl font-semibold">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste excepturi
                    </h3>
               </dt>
               <dd class="mb-16">
                    <p>
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, ut! Aliquid placeat omnis magnam numquam sit deleniti officia molestiae? Dolore veritatis voluptatum neque nihil cum suscipit vero facere ut repellat?
                    </p>
               </dd>
               <dt class="mb-4">
                    <h3 class="text-xl font-semibold">
                         Lorem ipsum dolor, sit amet consectetur
                    </h3>
               </dt>
               <dd class="mb-16">
                    <p>
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo impedit saepe recusandae dignissimos officiis quae minus, laudantium nostrum possimus tempora nemo sint reprehenderit temporibus dolorem reiciendis placeat expedita inventore nam!
                    </p>
               </dd>
               <dt class="mb-4">
                    <h3 class="text-xl font-semibold">
                         Lorem ipsum dolor sit, amet
                    </h3>
               </dt>
               <dd class="mb-16">
                    <p>
                         Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum eos dolore accusantium eius explicabo modi eum ullam ad obcaecati accusamus. Eaque illo fuga dolorum facere in velit quas! Unde, perspiciatis?
                    </p>
               </dd>
          </dl>
          </div>
     </div>
 
</body>
</html>