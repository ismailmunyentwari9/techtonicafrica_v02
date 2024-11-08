<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'tta');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['send'])) {
    $id = $_POST['id'];
    $names = $_POST['names'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $school = $_POST['school'];
    $nationality = $_POST['nationality'];
    $password = $_POST['password'];
    $payment_confirmation = $_POST['payment_confirmation'];

    // Start a transaction
    $conn->begin_transaction();

    try {
        // Prepare and bind
        $stmt = $conn->prepare("UPDATE titans SET full_names=?, email=?, age=?, phone=?, school=?, nationality=?, password=?, payment_confirmation=? WHERE student_id=?");
        $stmt->bind_param("ssisssssi", $names, $email, $age, $phone, $school, $nationality, $password, $payment_confirmation, $id);

        // Execute the statement
        if (!$stmt->execute()) {
            throw new Exception("Update process failed: " . $stmt->error);
        }

        // Commit the transaction
        $conn->commit();
        echo "
        <script>
            alert('Update Process Done Well....');
            location.href = './adminPanel.php';
        </script>
        ";
    } catch (Exception $e) {
        // Rollback the transaction if any error occurred
        $conn->rollback();
        echo "
        <script>
            alert('Update Process Failed: " . addslashes($e->getMessage()) . "');
            location.href = 'adminPanel.php';
        </script>
        ";
    }

    $stmt->close();
}

$conn->close();
?>
