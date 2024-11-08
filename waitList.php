<?php
$conn = new mysqli('localhost', 'root', '', 'tta');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['send'])) {
    $names = $_POST['names'];
    $age = $_POST['age'];
    $nationality = $_POST['nationality'];
    $school = $_POST['school'];
    $parent_phone = $_POST['parentPhone'];
    $student_phone = $_POST['phone'];

    if ($age > 18 || $age < 15) {
        echo "<script>
            alert('TechTonicAfrica is for ages of 15-18 Only, Please Contact us for more Info on our E-mail techtonicafrica@gmail.com...');
            location.href='student_register.php';
            </script>";
    } else {
        $stmt = $conn->prepare("INSERT INTO waitingList (names, age, nationality, school, parentPhone, studentPhone) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sissss", $names, $age, $nationality, $school, $parent_phone, $student_phone);

        if ($stmt->execute()) {
            echo "<script>
                alert('Thank you for your application! You have been added to our waiting list for the September intake. Stay tuned for further updates.');
                location.href = 'index.html';
                </script>";
        } else {
            echo "<script>
                alert('Registration Failed, Please Try Again...');
                location.href = 'student_register.php';
                </script>";
        }
        $stmt->close();
    }
} elseif (isset($_POST['submit'])) {
    $parent_name = $_POST['parent_name'];
    $student_name = $_POST['student_name'];
    $student_age = $_POST['student_age'];
    $nationality = $_POST['nationality'];
    $student_school = $_POST['student_school'];
    $parent_phone = $_POST['parent_phone'];
    $student_phone = $_POST['student_phone'];

    if ($student_age > 18 || $student_age < 15) {
        echo "<script>
            alert('TechTonicAfrica is for ages of 15-18 Only, Please Contact us for more Info on our E-mail techtonicafrica@gmail.com...');
            location.href='parent_register.php';
            </script>";
    } else {
        $stmt = $conn->prepare("INSERT INTO waitingList (parent, names, age, nationality, school, parentPhone, studentPhone) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssissss", $parent_name, $student_name, $student_age, $nationality, $student_school, $parent_phone, $student_phone);

        if ($stmt->execute()) {
            echo "<script>
                alert('Thank you for your application! You have been added to our waiting list for the September intake. Stay tuned for further updates.');
                location.href = 'index.html';
                </script>";
        } else {
            echo "<script>
                alert('Registration Failed, Please Try Again...');
                location.href = 'parent_register.php';
                </script>";
        }
        $stmt->close();
    }
}

$conn->close();
?>
