<?php
$conn = new mysqli('localhost', 'root', '', 'tta');
if(isset($_POST['send'])){
    $id=$_POST['id'];
    $comment = $conn->real_escape_string($_POST['comment']);
    $status=$_POST['status'];

if($status=='Approved'){
    $decision="Approved ✔";
}
elseif ($status=='Changes required') {
    $decision="Changes required ❌";
}
else{
    $decision='pending...';
}

    
        $query=mysqli_query($conn,"UPDATE feedback SET decision='$decision',comments='$comment' WHERE id='$id'");
        if($query){
            echo "
            <script>
                alert(\"FeedBack Added.\");
            location.href = 'adminPanel.php';
            </script>
            ";
            
        }
        else{
            echo "
            <script>
                alert('FeeddBack Failed, Please Try Again...');
                location.href ='adminPanel.php';
            </script>
            ";
        }
      
}




?>