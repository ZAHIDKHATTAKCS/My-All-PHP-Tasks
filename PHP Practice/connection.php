<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice_of_php";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    ?>
    <script>
        alert ("Database Connected Successfully");
    </script>
    <?php 
}
else{
    ?>
    <script>
        alert ("Database not connect you have to check your code");
    </script>
    <?php 
}
?>