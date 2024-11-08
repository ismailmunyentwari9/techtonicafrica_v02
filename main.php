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
                <li><a href="./hub.php" class="text-white text-xl hover:text-gray-300"><i
                            class="fa fa-signal ml-1"></i>
                        Hub</a></li>
                <li><a href="./base.html" class="text-white text-xl hover:text-gray-300"><i class="fa fa-cogs ml-1"></i>
                        Base </a></li>
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
                        <span>Hub</span>

                    </div>
                </a>
                <a href="./base.html">
                    <div
                        class="flex  items-center lg:justify-start lg:px-5 md:px-5 px-2 hover:bg-[#E6F3FA] cursor-pointer py-4 text-[#818A9B] lg:text-[25px] md:text-[20px] text-[17px] gap-5">

                        <span class=""><i class="fa fa-cogs"></i></span>
                        <span>Base </span>

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
                <div class="lg:w-[95%] md:w-[95%] w-[97%]  py-4 mx-auto">
                    <div
                        class="bg-[#FFFFFF] lg:w-[30%] md:w-[60%] w-[90%] justify-center align-center py-[20px] px-2 rounded-xl">
                        <h2 class="text-[26px] text-[#484D56] font-900">Greetings, TechTitans 👋</h2>
                        <p class="font-Sofia Pro text-[18px] text-black"><span>Today presents a fantastic opportunity to
                                push your programming goals to new heights. Seize the moment and make remarkable
                                progress!</span></p>

                    </div>

                    <div class="w-[95%] py-5">
                        <!-- Card 1: Level 1 -->
                        <div
                            class="bg-white hover:bg-[#E9F3FA] hover:border border-gray-300 lg:w-[90%] md:w-[90%] w-[100%] justify-center align-center py-[20px] px-2 rounded-xl mb-6">
                            <h2 class="text-[26px] text-[#000000] font-700">Frontend Development Curriculum: Level 1
                                Foundation <span class="fa fa-star text-orange-400"> </span>
                                <span class="fa fa-star-o text-orange-400"></span>
                                <span class="fa fa-star-o text-orange-400"></span>

                            </h2>
                            <p class="font-Sofia Pro text-[18px] text-[#484D56]"> This program covers the basics of
                                frontend web development over three months. Students will learn:

                            <p> <strong>HTML:</strong> Building the structure of web pages.</p>
                            <p><strong>CSS:</strong> Styling web pages to make them visually appealing.</p>
                            <p><strong>JavaScript: </strong>Adding interactivity and dynamic content to web pages.</p>
                            Throughout the course, students will work on projects to practice their skills and use Git
                            for version control and collaboration. By the end of the program, students will be able to
                            create responsive, accessible, and interactive web pages.</p>
                            <button onclick="showCredentialsBox()"
                                class="mt-4 bg-blue-500 text-white lg:px-4 md:px-2 px-1 py-2 rounded-md hover:bg-blue-600">Foundation</button>
                        </div>

                        <!-- Card 2: Level 2 -->
                        <div
                            class="bg-white hover:bg-[#E9F3FA] hover:border border-gray-300 lg:w-[90%] md:w-[90%] w-[100%] justify-center align-center py-[20px] px-2 rounded-xl mb-6">
                            <h2 class="text-[26px] text-[#000000] font-600">Full-stack Development Curriculum: Level 2
                                Intermediate <span class="fa fa-star text-orange-400"> <span
                                        class="fa fa-star text-orange-600"></span>
                                </span>
                                <span class="fa fa-star-o text-orange-400"></span>
                            </h2>
                            <p class="font-Sofia Pro text-[18px] text-[#484D56]">Builds upon the foundational knowledge
                                acquired in Level 1, focusing on advanced JavaScript and React.js. Students will delve
                                into:

                            <p><strong>Advanced JavaScript:</strong> Deepening understanding of modern JavaScript
                                features and best practices.</p>
                            <p><strong>React.js:</strong> Learning to build dynamic and efficient user interfaces with
                                React, including state management.</p>
                            <p><strong>Database Fundamentals:</strong> Introduction to SQL and database management.</p>
                            By the end of this level, students will have the skills to develop more complex frontend
                            applications, manage application state, and understand the basics of database integration.
                            </p>
                            <button onclick="showCredentialsBox()"
                                    class="mt-4 bg-blue-500 text-white lg:px-4 md:px-2 px-1 py-2 rounded-md hover:bg-blue-600">Intermediate</button>
                        </div>

                        <!-- Card 3: Level 3 -->
                        <div
                            class="bg-white hover:bg-[#E9F3FA] hover:border border-gray-300 lg:w-[90%] md:w-[90%] w-[100%] justify-center align-center py-[20px] px-2 rounded-xl">
                            <h2 class="text-[26px] text-[#000000] font-600">Full-stack Development Curriculum: Level 3 Advanced <span
                                    class="fa fa-star text-orange-400"> <span class="fa fa-star text-orange-600"> <span
                                            class="fa fa-star text-orange-800"></span></h2>
                            <p class="font-Sofia Pro text-[18px] text-[#484D56]">In Level 3, students will specialize in
                                advanced areas of frontend development, building on the knowledge from previous levels.
                                This level offers two distinct tracks: Backend Development and Frontend Development.

                                <strong>
                                    <p>* Dive deeper into SQL for database management.</p>
                                    <p>* Explore microservices and serverless computing.</p>
                                    <p>* Advanced database concepts.</p>
                                    <p>* Gain proficiency with Node.js, Express, and MongoDB.</p>
                                </strong>
                                By the end of Level 3, Students Will be equipped to handle complex challenges in
                                full-stack development, proficient in building robust applications with Express and
                                managing advanced databases.
                            </p>

                            <a href="./alert.php">
                                <button onclick=""
                                    class="mt-4 bg-blue-500 text-white lg:px-4 md:px-2 px-1 py-2 rounded-md hover:bg-blue-600">Advanced</button>
                            </a>
                        </div>



                    </div>
                </div>
            </div>
            <!-- Credentials Box -->
            <div id="credentialsBox"
                class="hidden bg-white mx-auto lg:w-[60%] md:w-[80%] w-[95%] col-span-10 justify-center align-center py-[13%] px-[] rounded-xl">
                <div class="flex justify-between ">
                    <h2 class="lg:text-[26px] md:text-[20px] text-[17px] text-[#484D56] font-600">Select Level</h2>
                    <button onclick="hideCredentialsBox()"
                        class="bg-red-500 text-white lg:px-4 md:px-2 px-1  py-2 rounded-md hover:bg-red-600">Close</button>
                </div>
                <form action="level_check.php" method="POST">
                    <div class="mt-4">
                        <input required name="level_pin" type="password" placeholder="Your Personal Level Code"
                            class="w-[100%] border border-gray-300 rounded-md py-1 px-2 focus:outline-none focus:ring focus:ring-blue-200">
                    </div>
                    <div class="mt-4">
                        <select required type="text" name="level_name"
                            class="w-[100%] border border-gray-300 rounded-md py-1 px-2 focus:outline-none focus:ring focus:ring-blue-200">
                            <option value="level_1">Level_1</option>
                            <option value="level_2">Level_2</option>
                            <option value="level_3">Level_3</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <button type="submit" name="send"
                            class="bg-blue-500 text-white lg:px-4 px-1 py-2 rounded-md hover:bg-blue-600">Access
                            Selected
                            Level</button>
                    </div>
                </form>
            </div>
        </section>

    </main>

    <script>
        const showCredentialsBox = () => {
            const credentialsBox = document.getElementById('credentialsBox');
            const mainBox = document.querySelector('.main');
            credentialsBox.classList.toggle('hidden');
            mainBox.style.display = 'none'; // Set the display property to 'none'
        }
        const hideCredentialsBox = () => {
            const credentialsBox = document.getElementById('credentialsBox');
            const mainBox = document.querySelector('.main');
            credentialsBox.classList.add('hidden');
            mainBox.style.display = 'flex'; // Set the display property to 'none'
        }
    </script>

</body>

</html>
<script src="./bars.js"></script>