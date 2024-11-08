<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Production version, optimized for size and performance -->
    <link href="https://unpkg.com/tailwindcss@3.4.3/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../../../../styles.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>


    <title>HTML Basics.</title>
</head>

<body>
    <main class="w-full h-[100vh]">
        <nav class="w-full bg-[#0582CA] py-[12px] lg:flex md:flex hidden">
            <div class="container mx-auto grid grid-cols-12 items-center">
                <div class="col-span-3">
                    <a href="../../../../main.php"><h1 class="text-[24px] font-[700] text-[#FFFFFF]">TechTonicAfrica</h1></a>
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

                <li><a href="../../../main.php" class="text-white text-xl hover:text-gray-300"><i
                            class="fa fa-home ml-1"></i>
                        Home</a></li>
                
                <li><a href="../../../hub.php" class="text-white text-xl hover:text-gray-300"><i
                            class="fa fa-signal ml-1"></i>
                        Hub </a></li>
                        <li><a href="../../../base.html" class="text-white text-xl hover:text-gray-300"><i
                            class="fa fa-cogs ml-1"></i>
                        Base </a></li>
                        
                <li><a href="../../../logout.php" class="text-white text-xl hover:text-gray-300"><i
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

                <a href="../../../main.php">
                    <div
                        class="flex  items-center lg:justify-start lg:px-5 md:px-5 px-2 hover:bg-[#E6F3FA] cursor-pointer py-4 text-[#818A9B] lg:text-[25px] md:text-[20px] text-[17px] gap-5">

                        <span class=""><i class="fa fa-home"></i></span>
                        <span>Home</span>

                    </div>

                </a>
                <a href="../../../hub.php">
                    <div
                        class="flex  items-center lg:justify-start lg:px-5 md:px-5 px-2 hover:bg-[#E6F3FA] cursor-pointer py-4 text-[#818A9B] lg:text-[25px] md:text-[20px] text-[17px] gap-5">

                        <span class=""><i class="fa fa-signal"></i></span>
                        <span>Hub </span>

                    </div>
                </a>
                <a href="../../../base.html">
                    <div
                        class="flex  items-center lg:justify-start lg:px-5 md:px-5 px-2 hover:bg-[#E6F3FA] cursor-pointer py-4 text-[#818A9B] lg:text-[25px] md:text-[20px] text-[17px] gap-5">

                        <span class=""><i class="fa fa-cogs"></i></span>
                        <span>Base </span>

                    </div>
                </a>
                <a href="../../../logout.php">
                    <div
                        class="flex  items-center lg:justify-start lg:px-5 md:px-5 px-2 hover:bg-[#E6F3FA] cursor-pointer py-4 text-[#818A9B] lg:text-[25px] md:text-[20px] text-[17px] gap-5">

                        <span class=""><i class="fa fa-external-link"></i></span>
                        <span>SignOut</span>

                    </div>
                </a>

            </div>
            <!-- Main Content Column -->
            <!-- Main Content Column -->
            <div class="main h-auto bg-gray-160 lg:col-span-10 md:col-span-10 col-span-12 px-3">
                <div class="w-full py-4 mx-auto">
                    <!-- Posters for video lectures -->
                    <div class="grid lg:grid-cols-2 md:grid-cols-2 col-span-1 gap-4 px-4">
                        <!-- First video poster (top) -->
                        <div class="lg:col-span-2 md:col-span-2 col-span-1 h-auto bg-white ">
                            <div class="h-[30vh] rounded-lg shadow-md p-4"
                                style="background-image: url('../../../assets/video.jpg'); background-size: cover; background-position: center;">
                                
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Day 1 Video Lecture</h3>
                                <!-- Placeholder for the button to watch the video -->
                                <a href="../../../2dailyAlert.php"><button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Watch
                                    Video</button></a>
                            
                                    
                        </div>

                        <!-- Second video poster -->
                        <div class="col-span-1 h-auto bg-white ">
                            <div class="h-[30vh] rounded-lg shadow-md p-4"
                                style="background-image: url('../../../assets/video.jpg'); background-size: cover; background-position: center;">
                                
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Day 2 Video Lecture</h3>
                                <!-- Placeholder for the button to watch the video -->
                                <a href="../../../2dailyAlert.php"><button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Watch
                                    Video</button></a>
                            
                        </div>
                        <!-- Third video poster -->
                        <div class="col-span-1 h-auto bg-white ">
                            <div class="h-[30vh] rounded-lg shadow-md p-4"
                            
                                style="background-image: url('../../../assets/video.jpg'); background-size: cover; background-position: center;">
                                
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Day 3 Video Lecture</h3>
                                <!-- Placeholder for the button to watch the video -->
                                <a href="../../../2dailyAlert.php"><button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Watch
                                    Video</button></a>
                                
                        </div>

                        <!-- Fourth video poster -->
                        <div class="col-span-1 h-auto bg-white ">
                            <div class="h-[30vh] rounded-lg shadow-md p-4"
                                style="background-image: url('../../../assets/video.jpg'); background-size: cover; background-position: center;">
                                
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Day 4 Video Lecture</h3>
                                <!-- Placeholder for the button to watch the video -->
                                <a href="../../../2dailyAlert.php"><button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Watch
                                    Video</button></a>
                                
                        </div>

                        <!-- Fifth video poster -->
                        <div class="col-span-1 h-auto bg-white ">
                            <div class="h-[30vh] rounded-lg shadow-md p-4"
                                style="background-image: url('../../../assets/video.jpg'); background-size: cover; background-position: center;">
                                
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Day 5 Video Lecture</h3>
                                <!-- Placeholder for the button to watch the video -->
                                <a href="../../../2dailyAlert.php"><button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Watch
                                    Video</button></a>
                                    <a href="../../../2dailyAlert.php"><button class="bg-white hover:bg-gray-200 text-blue-500 border border-blue-700 px-4 py-2 rounded-md">Day Task</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Credentials Box -->
            <div id="credentialsBox"
                class="hidden bg-white mx-auto w-[60%] col-span-10 justify-center align-center py-[13%] px-[] rounded-xl">
                <div class="flex justify-between">
                    <h2 class="text-[26px] text-[#484D56] font-600">Select Level</h2>
                    <a href="../../../2dailyAlert.php"><button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Watch
                        Video</button></a>
                        <a href="../../../2dailyAlert.php"><button class="bg-white hover:bg-gray-200 text-blue-500 border border-blue-700 px-4 py-2 rounded-md">Day Task</button></a>
                </div>
                <div class="mt-4">
                    <input type="password" placeholder="Your Personal Level Code"
                        class="w-[100%] border border-gray-300 rounded-md py-1 px-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                <div class="mt-4">
                    <select
                        class="w-[100%] border border-gray-300 rounded-md py-1 px-2 focus:outline-none focus:ring focus:ring-blue-200">
                        <option value="level1">Level_1</option>
                        <option value="level2">Level_2</option>
                        <option value="level3">Level_3</option>
                    </select>
                </div>
                <div class="mt-4">
                    <a href="./levels/level1.html"><button type="button"
                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Access Selected
                            Level</button></a>
                </div>
            </div>
        </section>

    </main>

</body>

</html>
<script src="../../../bars.js"></script>