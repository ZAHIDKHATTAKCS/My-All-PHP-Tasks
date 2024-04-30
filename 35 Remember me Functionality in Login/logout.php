<?php

session_start();
session_destroy();


// remove the cookie if someone click on logout
setcookie('Emailcookie','',time()-86400);
setcookie('Passwordcookie','',time()-86400);

header('location:login.php');
?>