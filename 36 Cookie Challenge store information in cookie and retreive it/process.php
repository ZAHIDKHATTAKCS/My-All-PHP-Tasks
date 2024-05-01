<?php

    if(isset($_POST['submit'])){
        $Username=$_POST['username'];
        $Age=$_POST['age'];
        $Degree=$_POST['degree'];

        // now stored in cookies separately

        setcookie('username',$Username,time()+86400);


        setcookie('age',$Age,time()+86400);


        setcookie('degree',$Degree,time()+86400);


        header('location:display.php');
    }

?>