<?php
    session_start();

    // whenever you want to update the specific session so there is not specific fnt for it in php
    // you have to called the old one key which you want to change like in this case $_SESSION['username'] and 
    // change it's value only in this like here
    $_SESSION['username']='Muhammad Zahid';

    
?>