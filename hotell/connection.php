<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'hotel';

$con = mysqli_connect($server, $username, $password, $db);

if ($con) {
   

} else {
    ?>
    <script>
        
        alert("Connection failed");
    </script>
    <?php
}
?>