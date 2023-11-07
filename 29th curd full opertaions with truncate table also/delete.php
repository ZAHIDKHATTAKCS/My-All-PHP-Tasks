<?php 

    include 'connection.php';
    $id4delete=$_GET['id'];

    $deletequery="DELETE FROM `insertion` WHERE id=$id4delete";

    $connt=mysqli_query($conn,$deletequery);

    if($connt){
        ?>
        <script>
            alert ('Record deleted');
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert ('Record not deleted yet');
        </script>
        <?php

    }
    header('location:show.php');
?>