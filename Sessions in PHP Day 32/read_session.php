<?php

    // when you use the values of the session in another page you must have to start session like


    session_start();

    if(isset($_SESSION['username'])){
        echo "My Name is ". $_SESSION['username']. "<br>";

        echo "My Age is " .$_SESSION['age']; 
    }
    else{
        echo "no username is set";
    }
    // echo "My Name is ". $_SESSION['username']. "<br>";

    // echo "My Age is " .$_SESSION['age'];
?>