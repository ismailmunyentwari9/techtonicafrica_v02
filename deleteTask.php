<?php
$conn = new mysqli('localhost', 'root', '', 'tta');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$taskId = $_GET['taskId'];

$results=mysqli_query($conn,"DELETE FROM feedback WHERE id='$taskId'");
if($results){
    echo "
    <script>
    alert('Deleting Task Successfully');
    location.href='./adminPanel.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Deleting Task Failed');
    location.href='./adminPanel.php';
    </script>
    "; 
}
