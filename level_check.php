<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'tta');

if (isset($_POST['send'])) {
    $level_name = $_POST['level_name'];
    $password = $_POST['level_pin'];
    
    // Check if the level_name and password match any record in the database
    $query = mysqli_query($conn, "SELECT * FROM levels WHERE level_name='$level_name' AND level_pin='$password'");
    
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['password'] = $password;

        // For level 1, level 2, and level 3
        if ($level_name == 'level_1') {
            // // Check if the current user's pin contains 'grad'
            // $titan_check = mysqli_query($conn, "SELECT * FROM levels WHERE level_name='$level_name' AND level_pin LIKE '%grad%'");
            
            if (strpos($password, 'grad') !== false) {
                echo "
                <script> 
                    alert('Welcome Mr/Mrs Grad, welcome back to {$level_name} ⭐...');
                    location.href = './levels/level1/level1.php';
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Welcome Mr/Mrs titan, welcome to {$level_name} ⭐...');
                    location.href = './levels/level1/level1_new_titans.php';
                </script>
                ";
            }
        }
        
        elseif ($level_name == 'level_2') {
            
            if (strpos($password, 'grad') !== false) {
                echo "
                <script>
                    alert('Welcome Mr/Mrs Grad, welcome back to {$level_name} ⭐...');
                    location.href = './levels/level2/level2.php';
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Welcome Mr/Mrs titan, welcome to {$level_name} ⭐...');
                    location.href = './levels/level2/level2_new_titans.php';
                </script>
                ";
            }

        } elseif ($level_name == 'level_3') {
        
            
            if (strpos($password, 'grad') !== false) {
                echo "
                <script>
                    alert('Welcome Mr/Mrs Grad, welcome back to {$level_name} ⭐...');
                    location.href = './levels/level3/level3.php';
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Welcome Mr/Mrs titan, welcome to {$level_name} ⭐...');
                    location.href = './levels/level3/level3_new_titans.php';
                </script>
                ";
            }

        } else {
            // Level does not exist in the system
            echo "
            <script>
                alert('The Level You picked does not exist in our system, Please Try Again...');
                location.href = 'main.php';
            </script>
            ";
        }
    } else {
        // Credentials do not match
        echo "
        <script>
            alert('⚠ Your credentials might not be correct, please try again...');
            location.href = 'main.php';
        </script>
        ";
    }
}

$conn->close();
?>
