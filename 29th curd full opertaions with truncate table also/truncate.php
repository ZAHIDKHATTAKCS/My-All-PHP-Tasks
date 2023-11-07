<?php 

    include 'connection.php';

    $truncatequery="truncate table insertion";

    $connetion=mysqli_query($conn,$truncatequery);

    if($connetion){
        ?>
            <script>
                alert ('You Erase all data');
            </script>
        <?php
    }
    else{

        ?>
            <script>
                alert ('Error in erasing data');
            </script>
        <?php
    }

    header('location:show.php');
?>