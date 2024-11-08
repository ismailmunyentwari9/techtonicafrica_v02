
<?php

// Database connection
$conn = new mysqli('localhost', 'root', '', 'tta');
//selected id............
$student_id=$_GET['student_id'];
// SQL query to select data
$qry = mysqli_query($conn, "SELECT * FROM titans WHERE student_id = $student_id");
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


    <title>Update Student</title>
</head>

<body>
    <main class="w-full h-auto">
         <!-- Credentials Box -->
         <div id="credentialsBox"
                class="bg-white mx-auto lg:w-[60%] w-[95%] col-span-10 justify-center align-center py-[5%] px-[] rounded-xl">
                <div class="flex justify-between mb-[3%]">
                    <h2 class="lg:text-[26px] md:text-[20px]  text-[17px] text-[#484D56] font-500">Update Student <span class="fa fa-user"></span></h2>
                    <a href="./adminPanel.php"><button
                    class="bg-red-500 text-white lg:px-4 md:px-2 px-1  py-2 rounded-md hover:bg-red-600">Cancel</button></a>
                </div>
                <?php
                            while($row = $qry->fetch_assoc()) {
                    ?>
                <form method="POST" action="./update_student.php" class="w-[100%] bg-white shadow-md rounded px-8  pb-8">
                    <div class="mb-4">
                        <label class="text-xl" for="names">ID:</label>
                        <input required  name="id" type="text"  class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700" value='<?php echo $row["student_id"]?>'>
                    </div>
                    <div class="mb-4">
                        <label class="text-xl" for="names">Names:</label>
                        <input required  name="names" type="text"  class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700" value='<?php echo $row["full_names"]?>'>
                    </div>
                    <div class="mb-4">
                    <label class="text-xl" for="names">Email:</label>
                        <input required  name="email" type="email"  class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700" value="<?php echo $row["email"]?>">
                    </div>
                    <div class="mb-4">
                    <label class="text-xl" for="names">Ages:</label>
                        <input required  name="age" type="number"  class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700" value="<?php echo $row["age"]?>">
                    </div>
                    <div class="mb-4">
                    <label class="text-xl" for="names">Phone:</label>
                        <input required  name="phone" type="text"  class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700" value="<?php echo $row["phone"]?>">
                    </div>
                    <div class="mb-4">
                    <label class="text-xl" for="names">School:</label>
                        <input required  name="school" type="text"  class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700" value="<?php echo $row["school"]?>">
                    </div>
                    <div class="mb-4">
                    <label class="text-xl" for="names">Nationality:</label>
                        <input required  name="nationality" type="text"  class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700" value="<?php echo $row["nationality"]?>">
                    </div>
                    <div class="mb-4">
                    <label class="text-xl" for="names">Password:</label>
                        <input required  name="password" type="text"  class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700" value=<?php echo $row["password"]?>>
                    </div>
                    
                    <div class="mb-4">
                    <label class="text-xl" for="names">Confirmation Code:</label>
                        <input required  name="payment_confirmation" type="text"  class="appearance-none border border-[#E6E8EF]-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#E6E8EF]-700" value="<?php echo $row["payment_confirmation"]?>">
                    </div>

                    <button name="send" type="submit" class="bg-[#0582CA] hover:bg-blue-700 text-white font-bold  py-2 px-4 text-[16px] rounded-[12px] focus:outline-none focus:shadow-outline w-full ">Save</button>
                </form>
                <?php }?>
            </div>
    </main>


</body>

</html>
<script src="./bars.js"></script>