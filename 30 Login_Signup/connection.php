<?php 

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="signup_and_login";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn){
        ?>
        <script>
            alert('Database Connected');
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert('Database Not Connected');
        </script>
        <?php
    }
?>