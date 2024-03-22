<?php

    // $to_email = "muhammadshehzad110123@gmail.com";
    $to_email="zahidkhattakcs@gmail.com";
    $subject="This is send is sending from localhost php";
    $body= "As you know I am zahidkhattak and I am sending you this message and email from localhost php code don't worry its just email";

    // in headers variable you must have to write from : in email place you have to write the email which you set in localhost php.ini file just like i give in readme file you can check it out from readme.MD file
    $headers="From: mrz5597998@gmail.com";
    
    // here i only use mail function in php code which help us to send emails to anyone by using localhost in PHP code and here are some variables you have to pass in this function like to_email mean to whom you want to send and subject means the topic which you want to send a brief messages, body means the message you want to send and headers is who are sending the message this is all about it 
    if(mail($to_email,$subject,$body,$headers)){
        echo "Email sent successfully";
    }
    else{
        echo "Email not sent error in your php code";
    }
    
?>