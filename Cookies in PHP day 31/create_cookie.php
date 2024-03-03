<!-- cookies are used to store the data of the web page in a remote web browser so that if user come back to that 
      page than the data will be retreived again
      and cookie are mainly used for manage the user sessions
      like when we add some products as an add to cart so these are stored in cookies 
      when back to add to cart tab all the products are listed again for us its actually retreived from cookie again
      also used for user identification
      also used for tracking a user 
-->
<?php
    // setcookie is the function which is used for create cookie
    //setcookie(); //this is not the actual syntax of creating a cookie
    
    // setcookie(name, value, expire, path, domain, secure, httponly); these values are all optional but only two are manadaotry

    
    setcookie('youtube','zahid',time()+600); //here time function is used for set cookie time mean that 
    // cookie will be expire after the given time and , here time function only track the current time and +600 means
    // cookie will be expire after the 600 seconds of the current time and this the creation of cookie now we have to
    // show it on browser 

    
    
?>