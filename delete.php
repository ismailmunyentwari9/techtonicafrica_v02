<?php
$conn = new mysqli('localhost', 'root', '', 'tta');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['student_id'];

// Start a transaction
$conn->begin_transaction();

try {
    // Delete from the dependent table first
    $deleteLevels = $conn->query("DELETE FROM levels WHERE id=$id");

    // Check if the deletion from levels was successful
    if (!$deleteLevels) {
        throw new Exception("Error deleting from levels: " . $conn->error);
    }

    // Delete from the primary table
    $deleteTitans = $conn->query("DELETE FROM titans WHERE student_id=$id");

    // Check if the deletion from titans was successful
    if (!$deleteTitans) {
        throw new Exception("Error deleting from titans: " . $conn->error);
    }

    // Commit the transaction if both deletions were successful
    $conn->commit();
    header("Location: ./adminPanel.php");
    exit();

} catch (Exception $e) {
    // Rollback the transaction if any deletion failed
    $conn->rollback();
    echo "
    <script>
    alert('Deleting Student Failed: " . addslashes($e->getMessage()) . "');
    location.href='./adminPanel.php';
    </script>
    ";
}

// Close the connection
$conn->close();
?>
