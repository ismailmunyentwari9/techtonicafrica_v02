<?php
$conn = new mysqli('localhost', 'root', '', 'tta');

if (isset($_POST['send'])) {
    $password = $_POST['password'];
    $task_name = $_POST['task_name'];
    $task_level = $_POST['task_level'];
    $week_name = $_POST['week_name'];
    $submission_date = $_POST['submission_date'];
    $pull_request_link = $_POST['pull_request_link'];
    $loom_video_link = $_POST['loom_video_link'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO feedback (password, task_name, level_name,week_name,date, pull_link, loom_link) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('sssssss', $password, $task_name, $task_level,$week_name, $submission_date, $pull_request_link, $loom_video_link);

    try {
        $stmt->execute();
        echo "
        <script>
            alert('Successfully submitted your task.');
            location.href = './studenthub.php';
        </script>
        ";
    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1062) {
            echo "
            <script>
                alert('Duplicate task name detected. Please use a different task name.');
                location.href = './studenthub.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Submission failed. Please try again...');
                location.href = './studenthub.php';
            </script>
            ";
        }
    }
    
    $stmt->close();
}

$conn->close();
?>
