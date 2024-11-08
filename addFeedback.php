<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'tta');

// Fetch the task details based on tasId from GET parameter
$tasId = $_GET['tasId'];
$qry = mysqli_query($conn, "SELECT * FROM feedback WHERE id = '$tasId'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Add FeedBack</title>
</head>

<body class="bg-gray-100">
    <main class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-lg">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900">Add Feedback</h2>
                <a href="./adminPanel.php" class="text-red-500 hover:text-red-700"><i class="fa fa-times-circle"></i></a>
            </div>

            <?php while($row = $qry->fetch_assoc()): ?>
            <form action="feedbackCodes.php" method="POST" class="mt-8 space-y-6">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">

                <div>
                    <label for="comment" class="block text-sm font-medium text-gray-700">Feedback Comment</label>
                    <textarea name="comment" required id="comment" rows="4" class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm"></textarea>
                </div>

                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" id="status" class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm">
                        <option value="Pending">Pending</option>
                        <option value="Approved">Approved</option>
                        <option value="Changes required">Changes required</option>
                    </select>
                </div>

                <div>
                    <button type="submit" name="send" class="mt-4 w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Submit Feedback
                    </button>
                </div>
            </form>
            <?php endwhile; ?>
        </div>
    </main>
</body>

</html>
