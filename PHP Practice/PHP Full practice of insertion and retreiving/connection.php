<?php 


$servername = 'localhost';
$username = 'root';
$password= '';
$dbname= 'practice_of_php';

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    ?>
    <script>
        alert("You are connected to database successfully");
    </script>
    <?php
}
else{

    ?>
    <script>
        alert("You are not connected succesffuly");
    </script>
    <?php
}

?>