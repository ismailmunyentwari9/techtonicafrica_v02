<?php
session_start();
session_destroy();
echo "
     <script>
    alert(\"Thank you For Being With Us Mr/Mrs Titan\");
    location.href='login.php';
    </script>
    ";


?>