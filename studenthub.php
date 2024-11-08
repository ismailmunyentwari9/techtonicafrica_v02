<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['password'])) {
    echo "<script>
    alert('⚠You are not logged in. Please log in first.');
    location.href='./hub.php';
    </script>";
    exit();
}

// Database connection
$conn = new mysqli('localhost', 'root', '', 'tta');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the student details using the session 'Password' value
$password = $_SESSION['password'];
$stmt = $conn->prepare("SELECT full_names, age, nationality, password,payment_confirmation FROM titans WHERE password = ?");
$stmt->bind_param("s", $password);
$stmt->execute();
$result = $stmt->get_result();

// Check if the student exists
if ($result->num_rows == 0) {
    echo "<script>
    alert('⚠No student found with the provided Password.');
    location.href='./hub.php';
    </script>";
    exit();
}

$student = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bg-gray-100">
    <main class="w-full h-auto">
    <nav class="w-full bg-blue-500 py-4 flex flex-col lg:flex-row md:flex-row  justify-between px-6">
            <h1 class="text-2xl font-bold text-white">TechTonicAfrica</h1>
            <div>
                <a href="./main.php" class="text-white text-xl hover:text-gray-300"><i class="fa fa-home ml-1"></i> Home</a>
                <a href="./feedbacks.php" class="text-white text-xl hover:text-gray-300 ml-4"><i class="fa fa-archive ml-1"></i> Feedbacks</a>
            </div>
        </nav>
        <section class="container mx-auto mt-8 p-4">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-3xl font-bold mb-6">Welcome, <?php echo htmlspecialchars($student['full_names']); ?></h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md flex items-center">
                        <i class="fa fa-user fa-3x text-blue-500 mr-4"></i>
                        <div>
                            <h3 class="text-xl font-bold">Name</h3>
                            <p><?php echo htmlspecialchars($student['full_names']); ?></p>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md flex items-center">
                        <i class="fa fa-flag fa-3x text-green-500 mr-4"></i>
                        <div>
                            <h3 class="text-xl font-bold">Country</h3>
                            <p><?php echo htmlspecialchars($student['nationality']); ?></p>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md flex items-center">
                        <i class="fa fa-calendar fa-3x text-yellow-500 mr-4"></i>
                        <div>
                            <h3 class="text-xl font-bold">Age</h3>
                            <p><?php echo htmlspecialchars($student['age']); ?> Years</p>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md flex items-center">
                        <i class="fa fa-file-code-o fa-3x text-red-500 mr-4"></i>
                        <div>
                            <h3 class="text-xl font-bold">Password</h3>
                            <p><?php echo htmlspecialchars($student['password']); ?></p>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md flex items-center">
                        <i class="fa fa-check-square-o fa-3x text-purple-500 mr-4"></i>
                        <div>
                            <h3 class="text-xl font-bold">payment Code</h3>
                            <p><?php echo htmlspecialchars($student['payment_confirmation']); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Task Submission Form -->
            <div class="bg-white p-6 rounded-lg shadow-md mt-8">
                <h2 class="text-2xl font-bold mb-6">Submit Your Task</h2>
                <form action="addTask.php" method="POST" class="space-y-6">
                <div class="hidden">
                    <label for="task_password" class="block text-lg font-medium text-gray-700">Student ID</label>
                    <input type="text" name="password" id="password" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md" value='<?php echo $_SESSION['password']?>'>
                </div>

                    <div>
                        <label for="task_name" class="block text-lg font-medium text-gray-700">Task Name</label>
                        <input type="text" name="task_name" id="task_name" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md" placeholder="Enter task name">
                    </div>
                    <div>
                        <label for="task_level" class="block text-lg font-medium text-gray-700">Select Level</label>
                        <select name="task_level" id="task_level" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md">
                            <option value="level_1">Level 1</option>
                            <option value="level_2">Level 2</option>
                            <option value="level_3">Level 3</option>
                        </select>
                    </div>
                    <div>
                        <label for="week_name" class="block text-lg font-medium text-gray-700">Select Week</label>
                        <select name="week_name" id="week_name" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md">
                            <option value="week_1">Week 1</option>
                            <option value="week_2">Week 2</option>
                            <option value="week_3">Week 3</option>
                            <option value="week_4">Week 4</option>
                            <option value="week_5">Week 5</option>
                            <option value="week_6">Week 6</option>
                            <option value="week_7">Week 7</option>
                            <option value="week_8">Week 8</option>
                            <option value="week_9">Week 9</option>
                            <option value="week_10">Week 10</option>
                            <option value="week_11">Week 11</option>
                            <option value="week_12">Week 12</option>
                        </select>
                    </div>
                    <div>
                        <label for="submission_date" class="block text-lg font-medium text-gray-700">Submission Date</label>
                        <input type="date" name="submission_date" id="submission_date" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md">
                    </div>
                    <div>
                       <label for="pull_request_link" class="block text-lg font-medium text-gray-700">Link of Repository</label>
                        <input type="url" name="pull_request_link" id="pull_request_link" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md" placeholder="https://github.com/yourusername/repository">
                           </div>
                    <div>
    <label for="loom_video_link" class="block text-lg font-medium text-gray-700">Link of Loom Video</label>
    <input type="url" name="loom_video_link" id="loom_video_link" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md" placeholder="https://www.loom.com/share/yourvideoid">
</div>

                    
                    <div>
                        <button type="submit" name="send" class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-700">Submit Task</button>
                    </div>
                </form>
            </div>

            <!-- Feedback Button -->
            <div class="bg-white p-6 rounded-lg shadow-md mt-8">
                <h2 class="text-2xl font-bold mb-6">Task Feedbacks</h2>
                <a href="feedbacks.php" class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-700">View Feedbacks</a>
            </div>
        </section>
    </main>
</body>

</html>
