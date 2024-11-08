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

// Fetch the student details using the session 'password' value
$password = $_SESSION['password'];

// Fetch task feedback for the student
$feedback_stmt = $conn->prepare("SELECT task_name, level_name, date, pull_link,loom_link,comments, decision FROM feedback WHERE password = ?");
$feedback_stmt->bind_param("s", $password);
$feedback_stmt->execute();
$feedback_result = $feedback_stmt->get_result();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Feedbacks</title>
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bg-gray-100">
    <main class="w-full h-auto">
        <nav class="w-full bg-blue-500 py-4 flex flex-col lg:flex-row md:flex-row  justify-between px-6">
            <h1 class="text-2xl font-bold text-white">TechTonicAfrica</h1>
            <div>
                <a href="./main.php" class="text-white text-xl hover:text-gray-300"><i class="fa fa-home ml-1"></i> Home</a>
                <a href="./studenthub.php" class="text-white text-xl hover:text-gray-300 ml-4"><i class="fa fa-user ml-1"></i> Hub</a>
            </div>
        </nav>
        <section class="max-w-6xl mx-auto mt-8 p-4">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="lg:text-3xl md:text-xl text-lg font-bold mb-6">Your Task Feedbacks</h2>
                <?php if ($feedback_result->num_rows > 0): ?>
                    <div class="space-y-6">
                        <?php while($feedback = $feedback_result->fetch_assoc()): ?>
                            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-bold mb-2">Task: <?php echo htmlspecialchars($feedback['task_name']); ?></h3>
                                <p class="text-lg"><strong>Level:</strong> <?php echo htmlspecialchars($feedback['level_name']); ?></p>
                                <p class="text-lg"><strong>Status:</strong> <span class="text-red-600"><?php echo nl2br(htmlspecialchars($feedback['decision'])); ?></span></p>
                                <p class="text-sm text-gray-500 mt-2"><strong>Date:</strong> <?php echo htmlspecialchars($feedback['date']); ?></p>
                                <p class="text-sm text-gray-500 mt-2 lg:w-1/3 md:w-1/2 w-1/1"><strong>FeedBack:</strong> <?php echo htmlspecialchars($feedback['comments']); ?></p>
                                <?php if (!empty($feedback['pull_link'])): ?>
                                    <a href="<?php echo htmlspecialchars($feedback['pull_link']); ?>" class="inline-block mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700" target="_blank">
                                        View Pull Request
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($feedback['loom_link'])): ?>
                                    <a href="<?php echo htmlspecialchars($feedback['loom_link']); ?>" class="inline-block mt-4 bg-blue-900 text-white py-2 px-4 rounded hover:bg-blue-500" target="_blank">
                                        View Loom Video
                                    </a>
                                <?php endif; ?>
                                
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <p class="text-gray-700">No feedbacks found.</p>
                <?php endif; ?>
            </div>
        </section>
    </main>
</body>

</html>
