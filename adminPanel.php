<?php

// Database connection
$conn = new mysqli('localhost', 'root', '', 'tta');

// SQL query to select data
$qry = mysqli_query($conn, "SELECT * FROM titans");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@3.4.3/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Admin Dashboard</title>
</head>

<body>
    <main class="w-full h-auto">
        <nav class="w-full bg-[#0582CA] py-[12px] lg:flex md:flex hidden">
            <div class="container mx-auto grid grid-cols-12 items-center">
                <div class="col-span-3">
                    <h1 class="text-[24px] font-[700] text-[#FFFFFF]">TechTonicAfrica</h1>
                </div>
                <div class="col-span-5 flex justify-center">
                    <div class="w-[100%]">
                        <input type="text" class="w-[100%] border border-gray-300 rounded-md py-1 px-2 focus:outline-none focus:ring focus:ring-blue-200" placeholder="Search...">
                    </div>
                </div>
                <div class="col-span-4 flex justify-end items-center gap-5">
                    <div class="relative">
                        <span><i class="fa fa-bell text-2xl"></i></span>
                        <div class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-4 h-4 flex items-center justify-center text-xs">5</div>
                    </div>
                    <div class="flex items-center rounded-3xl gap-2 bg-[#FFFFFF] w-auto px-2 py-[2px]">
                        <span><i class="fa fa-user"></i></span>
                        <span class="font-[500] text-[16px] text-[#1C1F23]">Tech Titan</span>
                    </div>
                </div>
            </div>
        </nav>
        <div class="w-full bg-[#0582CA] py-[12px] items-start lg:hidden md:hidden flex justify-between px-2">
            <ul class="mobile flex-wrap space-y-2 hidden flex-col justify-end">
                <li><a href="./main.php" class="text-white text-xl hover:text-gray-300"><i class="fa fa-home ml-1"></i> Home</a></li>
                <li><a href="./hub.php" class="text-white text-xl hover:text-gray-300"><i class="fa fa-signal ml-1"></i> Hub </a></li>
                <li><a href="./base.html" class="text-white text-xl hover:text-gray-300"><i class="fa fa-cogs ml-1"></i> Base </a></li>
                <li><a href="./logout.php" class="text-white text-xl hover:text-gray-300"><i class="fa fa-external-link ml-1"></i> SignOut</a></li>
            </ul>
            <h1 class="sm:text-[24px] font-[400] text-[#FFFFFF] mr-2">TechTonicAfrica</h1>
            <button id="menu-toggle" class="text-white focus:outline-none"><i class="bars fa fa-bars text-white text-xl"></i></button>
        </div>
        <section class="w-full grid grid-cols-12">
            <div class="h-screen bg-white col-span-2 lg:flex md:flex flex-col hidden">
                <a href="./main.php">
                    <div class="flex items-center lg:justify-start lg:px-5 md:px-5 px-2 hover:bg-[#E6F3FA] cursor-pointer py-4 text-[#818A9B] lg:text-[25px] md:text-[20px] text-[17px] gap-5">
                        <span><i class="fa fa-home"></i></span>
                        <span>Home</span>
                    </div>
                </a>
                <a href="./hub.php">
                    <div class="flex items-center lg:justify-start lg:px-5 md:px-5 px-2 hover:bg-[#E6F3FA] cursor-pointer py-4 text-[#818A9B] lg:text-[25px] md:text-[20px] text-[17px] gap-5">
                        <span><i class="fa fa-signal"></i></span>
                        <span>Hub </span>
                    </div>
                </a>
                <a href="./base.html">
                    <div class="flex items-center lg:justify-start lg:px-5 md:px-5 px-2 hover:bg-[#E6F3FA] cursor-pointer py-4 text-[#818A9B] lg:text-[25px] md:text-[20px] text-[17px] gap-5">
                        <span><i class="fa fa-cogs"></i></span>
                        <span>Base </span>
                    </div>
                </a>
                <a href="./logout.php">
                    <div class="flex items-center lg:justify-start lg:px-5 md:px-5 px-2 hover:bg-[#E6F3FA] cursor-pointer py-4 text-[#818A9B] lg:text-[25px] md:text-[20px] text-[17px] gap-5">
                        <span><i class="fa fa-external-link"></i></span>
                        <span>SignOut</span>
                    </div>
                </a>
            </div>
            <div class="main h-auto bg-gray-100 lg:col-span-10 md:col-span-10 col-span-12">
                <div class="container mx-auto p-4">
                    <h1 class="text-2xl font-bold mb-4">Student Credentials</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <?php
                        if ($qry->num_rows > 0) {
                            while($row = $qry->fetch_assoc()) {
                                echo "<div class='bg-white lg:p-4 md:p-2 p-0 py-3 rounded-lg shadow-md'>";
                                echo '<a href="./check_tasks.php?password=' . $row["password"] . '"><button class="bg-green-500 text-white px-4 py-2 rounded"><i class="fa fa-tasks"></i> Check Tasks</button></a>';
                                echo "<p><strong>Student ID:</strong> " . $row["student_id"] . "</p>";
                                echo "<p><strong>Full Names:</strong> " . $row["full_names"] . "</p>";
                                echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                                echo "<p><strong>Age:</strong> " . $row["age"] . " Years</p>";
                                echo "<p><strong>Phone:</strong> " . $row["phone"] . "</p>";
                                echo "<p><strong>School:</strong> " . $row["school"] . "</p>";
                                echo "<p><strong>Nationality:</strong> " . $row["nationality"] . "</p>";
                                echo "<p><strong>Password:</strong> " . $row["password"] . "</p>";
                                echo "<p><strong>Payment Confirmation:</strong> " . $row["payment_confirmation"] . "</p>";
                                echo "<div class='flex justify-between flex-wrap mt-5'>";
                                echo '<a href="./update.php?student_id=' . $row["student_id"] . '"><button class="bg-blue-500 text-white px-4 py-2 rounded"><i class="fa fa-pencil"></i> Update</button></a>';
                                echo '<a href="./delete.php?student_id=' . $row["student_id"] . '"><button class="bg-red-500 text-white px-4 py-2 rounded"><i class="fa fa-trash"></i> Delete</button></a>';
                                
                                echo "</div>";
                                echo "</div>";
                            }
                        } else {
                            echo "<div class='col-span-1 text-center'>No records found</div>";
                        }
                        $conn->close();
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
<script src="./bars.js"></script>
