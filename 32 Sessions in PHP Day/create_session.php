<?php
    // A session is the way to store information in variables and used in multiple pages in your website 

    // session is unlike the cookie its not store the data in the user computer, and the attacker can changes the 
    // cookie easily but can't change the session


    // for creating a session in PHP we have to call a built in function that is session_start(); than your session will
    // be created 

    session_start();
    
    // to check that my session is created or not you have to go to xampp folder and than go to 
    // temp folder , than when you run the code a new session file will be added to the temp folder

    // as we know when we store a value in a session you can use it in any page 
 
    //           key            value         session is key value pair
    $_SESSION['username']='zahid khattak';

    $_SESSION['age']=23;
    








    
?>
