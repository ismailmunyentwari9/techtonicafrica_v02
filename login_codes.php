<?php
session_start();
$conn = new mysqli('localhost','root','','tta');
if(isset($_POST['send'])){
    $names =$_POST['names'];
    $password =$_POST['password'];
    $pin=$_POST['pin'];

        $query=mysqli_query($conn,"SELECT * FROM titans WHERE 	full_names='$names' AND password ='$password' AND payment_confirmation='$pin'");

        if(mysqli_num_rows($query)>0){
           $_SESSION['pin']=$pin;
            echo "
            <script>
            alert(`Welcome Mr/Mrs ${names}, You're now Full Tech Titan ✅...`);
            location.href='main.php';
            </script>
            ";
            
        }
        else{
            echo "
            <script>
            alert('⚠Your cridentials might not be Correct, Please Try Again...');
            location.href='login.php';
            </script>
            ";
        }
    
}
$conn->close();



?>