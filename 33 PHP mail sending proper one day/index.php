<?php
    $to_email= "mrz5597998@gmail.com";
    $subject = "Simple Email Test ";
    $body= "Hi, this is from php, how are you buddy whats going on , i am sending you this  message test using php";
    $headers="From : mrz5597998@gmail.com";
    if(mail($to_email,$subject,$body,$headers)){
        echo "Mail Sent";
    }
    else{
        echo "Mail Not Sent";
    }
?>