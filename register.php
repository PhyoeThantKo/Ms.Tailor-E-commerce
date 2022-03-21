<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Register</title>
     <link rel="stylesheet" href="style/style.css">
</head>
<body>
     <div class="flex justify-center items-center">
     <div class="flex flex-col w-full max-w-md px-4 py-8 bg-white rounded-lg shadow dark:bg-gray-800 sm:px-6 md:px-8 lg:px-10">
    <div class="self-center mb-6 text-xl font-light text-gray-600 sm:text-2xl dark:text-white">
        Register Your Account
    </div>
    <div class="mt-8">
        <form action="reg-to-server.php" method="post" autoComplete="off">
            <div class="flex flex-col mb-2">
                <div class="flex relative ">
                    <input type="text" name="username" class=" rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="User Name"/>
                    </div>
                </div>
                <div class="flex flex-col mb-6">
                    <div class="flex relative ">
                        <input type="password" name="password" class=" rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="flex w-full">
                        <button type="submit" class="py-2 px-4  bg-green-600 hover:bg-green-700 focus:ring-green-500 focus:ring-offset-green-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                            Sign up
                        </button>
                    </div>
                </form>
            </div>
</div>
     </div>

</body>
</html>