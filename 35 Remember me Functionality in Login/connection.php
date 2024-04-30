<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="signup_and_login";
    
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    
    if($conn){
        ?>
            <script>
            alert('Database connection established!');
            </script>
        <?php
    }else{
        ?>
            <script>
            alert('Database connection failed!');
            </script>
        <?php
    }
?>