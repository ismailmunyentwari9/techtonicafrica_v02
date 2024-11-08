<?php
session_start();
$conn = new mysqli('localhost','root','','tta');
if(isset($_POST['send'])){
    $name =$_POST['name'];
    $password =$_POST['password'];

        $query=mysqli_query($conn,"SELECT * FROM admin WHERE 	adminName='$name' AND adminPassword ='$password'");

        if(mysqli_num_rows($query)>0){
           $_SESSION['adminName']=$name;
            echo "
            <script>
            alert(`Welcome Mr/Mrs ${name}✅...`);
            location.href='./adminPanel.php';
            </script>
            ";
            
        }
        else{
            echo "
            <script>
            alert('⚠You might not be an admin of this system. Please use other features, not this one');
            location.href='./main.php';
            </script>
            ";
        }
    
}
elseif (isset($_POST['submit'])) {
    $password =$_POST['pin1'];
    $c_code =$_POST['pin2'];
    $query=mysqli_query($conn,"SELECT * FROM titans WHERE 	password='$password' AND payment_confirmation ='$c_code'");
    if(mysqli_num_rows($query)>0){
        $_SESSION['password']=$password;
         echo "
         <script>
         alert(`Welcome to your Personal Dashboard...`);
         location.href='./studenthub.php';
         </script>
         ";
         
     }
     else{
        echo "
        <script>
        alert('⚠Credentials do not match. Please try again.');
        location.href='./hub.php';
        </script>
        ";
    }
     
     
}
$conn->close();



?>