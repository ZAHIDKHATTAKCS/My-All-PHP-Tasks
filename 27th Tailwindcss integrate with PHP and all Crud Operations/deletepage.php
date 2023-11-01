<?php 

    include('connection.php');

    $theid=$_GET['id'];

    $deletionquery="DELETE FROM `data` WHERE id=$theid";

    $deletion=mysqli_query($conn,$deletionquery);

    if($deletion){
        ?>
        <script>
            alert('Data Deleted sucessfully');
        </script>
        <?php
    }
    else{
        ?>
        
        <script>
            alert('Data Cant be deleted');
        </script>
        <?php
    }

    // header location is used for when data is deleted than it will go to the page whatever we define in header location property

    header('location:showdata.php');
?>