<?php
session_start();
if(!isset($_SESSION['pin'])) {
    header("Location: signup.php");
    exit(); 
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Production version, optimized for size and performance -->
    <link href="https://unpkg.com/tailwindcss@3.4.3/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./styles.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>


    <title>Main</title>
</head>

<body>
    <main class="w-full h-auto">
        <nav class="w-full bg-[#0582CA] py-[12px] lg:flex md:flex hidden">
            <div class="container mx-auto grid grid-cols-12 items-center">
                <div class="col-span-3">
                    <h1 class="text-[24px] font-[700] text-[#FFFFFF]">TechTonicAfrica</h1>
                </div>
                <div class="col-span-5 flex justify-center">
                    <!-- Middle column for search options -->
                    <div class="w-[100%]">
                        <input type="text"
                            class="w-[100%] border border-gray-300 rounded-md py-1 px-2 focus:outline-none focus:ring focus:ring-blue-200"
                            placeholder="Search...">
                    </div>
                </div>

                <div class="col-span-4 flex justify-end items-center gap-5">
                    <!-- Bell icon container with red notification number -->
                    <div class="relative">
                        <span><i class="fa fa-bell text-2xl"></i></span>
                        <div
                            class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-4 h-4 flex items-center justify-center text-xs">
                            5</div>
                    </div>
                    <!-- User profile section -->
                    <div class="flex items-center rounded-3xl gap-2 bg-[#FFFFFF] w-auto px-2 py-[2px]">
                        <span><i class="fa fa-user"></i></span>
                        <span class="font-[500] text-[16px] text-[#1C1F23]">Tech Titan</span>
                    </div>
                </div>
            </div>
        </nav>
        <div class="w-full bg-[#0582CA] py-[12px] items-start lg:hidden md:hidden flex justify-between px-2">

            <ul class="mobile flex-wrap space-y-2 hidden flex-col justify-end">

                <li><a href="./main.php" class="text-white text-xl hover:text-gray-300"><i class="fa fa-home ml-1"></i>
                        Home</a></li>
                <li><a href="./alert.php" class="text-white text-xl hover:text-gray-300"><i
                            class="fa fa-signal ml-1"></i>
                        Hub </a></li>
                <li><a href="./base.html" class="text-white text-xl hover:text-gray-300"><i class="fa fa-cogs ml-1"></i>
                        Base</a></li>

                <li><a href="./logout.php" class="text-white text-xl hover:text-gray-300"><i
                            class="fa fa-external-link ml-1"></i>
                        SignOut</a></li>
            </ul>
            <!-- Buttons -->
            <h1 class="sm:text-[24px]  font-[400] text-[#FFFFFF] mr-2">TechTonicAfrica</h1>
            <button id="menu-toggle" class="text-white focus:outline-none">
                <i class="bars fa fa-bars text-white text-xl"></i>
            </button>

        </div>
        <section class="w-full grid grid-cols-12">
            <!-- Menu Column -->

            <div class="h-screen bg-white  col-span-2 lg:flex md:flex flex-col hidden">
                <!-- Menu content goes here -->

                <a href="./main.php">
                    <div
                        class="flex  items-center lg:justify-start lg:px-5 md:px-5 px-2 hover:bg-[#E6F3FA] cursor-pointer py-4 text-[#818A9B] lg:text-[25px] md:text-[20px] text-[17px] gap-5">

                        <span class=""><i class="fa fa-home"></i></span>
                        <span>Home</span>

                    </div>

                </a>
                <a href="./hub.php">
                    <div
                        class="flex  items-center lg:justify-start lg:px-5 md:px-5 px-2 hover:bg-[#E6F3FA] cursor-pointer py-4 text-[#818A9B] lg:text-[25px] md:text-[20px] text-[17px] gap-5">

                        <span class=""><i class="fa fa-signal"></i></span>
                        <span>Hub </span>

                    </div>
                </a>
                <a href="./base.html">
                    <div
                        class="flex  items-center lg:justify-start lg:px-5 md:px-5 px-2 hover:bg-[#E6F3FA] cursor-pointer py-4 text-[#818A9B] lg:text-[25px] md:text-[20px] text-[17px] gap-5">

                        <span class=""><i class="fa fa-cogs"></i></span>
                        <span>Base</span>

                    </div>
                </a>

                <a href="./logout.php">
                    <div
                        class="flex  items-center lg:justify-start lg:px-5 md:px-5 px-2 hover:bg-[#E6F3FA] cursor-pointer py-4 text-[#818A9B] lg:text-[25px] md:text-[20px] text-[17px] gap-5">

                        <span class=""><i class="fa fa-external-link"></i></span>
                        <span>SignOut</span>

                    </div>
                </a>

            </div>
            <!-- Main Content Column -->
            <div class=" main h-auto bg-gray-100 lg:col-span-10 md:col-span-10 col-span-12">
                <div id="credentialsBox"
                    class="mx-auto shadow-2xl lg:w-[70%] px-12 md:w-[80%] w-[95%] col-span-10 justify-center align-center py-[13%] px-[] rounded-xl">
                    <div class="flex justify-between ">
                        <h2 class="lg:text-[26px] md:text-[20px] text-[17px] text-[#484D56] font-600">Student Cridentials</h2>
                    </div>
                    <form action="./admin.php" method="POST">
                        <div class="mt-4">
                            <input required name="pin1" type="password" placeholder="Your Personal Password*"
                                class="w-[100%] border border-gray-300 rounded-md py-1 px-2 focus:outline-none focus:ring focus:ring-blue-200">
                        </div>
                        <div class="mt-4">
                            <input required name="pin2" type="password" placeholder="Your Payment Confirmation Code*"
                                class="w-[100%] border border-gray-300 rounded-md py-1 px-2 focus:outline-none focus:ring focus:ring-blue-200">
                        </div>
                        <div class="mt-4">
                            <button type="submit" name="submit"
                                class="bg-blue-500 text-white lg:px-4 px-1 py-2 rounded-md hover:bg-blue-600">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </section>

    </main>


</body>

</html>
<script src="./bars.js"></script>