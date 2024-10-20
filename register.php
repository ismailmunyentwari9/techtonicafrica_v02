<?php
$conn = new mysqli('localhost', 'root', '', 'tta');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['send'])){
    // Escape special characters in input values
    $names = mysqli_real_escape_string($conn, $_POST['names']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $school = mysqli_real_escape_string($conn, $_POST['school']);
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $recommend = mysqli_real_escape_string($conn, $_POST['referral_source']);

    if ($password !== $confirm) {
        echo "
        <script>
        alert('Passwords are not matching. Try again!');
        location.href='signup.php';
        </script>
        ";
    } elseif ($age > 18 OR $age < 15) {
        echo "
        <script>
        alert('TechTonicAfrica is for ages of 15-18 Only, Please Contact us for more Info on our E-mail techtonicafrica@gmail.com...');
        location.href='signup.php';
        </script>
        ";
    } else {
        // Insert data into database
        $query = mysqli_query($conn, "INSERT INTO titans (full_names, email, age, phone, school, nationality, password, recommendend) VALUES ('$names', '$email', '$age', '$phone', '$school', '$nationality', '$password', '$recommend')");
        
        if ($query) {
            echo "
            <script>
                alert(\"You're one step Away From Being A Tech TiTan. Lastly, is the payment phase of the process.\");
                location.href = 'payment.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Registration Failed, Please Try Again...');
                location.href = 'signup.php';
            </script>
            ";
        }
    }
}
?>
