<?php
    // for update cookie you have to use setcookie fnt again but you have to change its value like here
    // is zahid khattak first it was zahid and keep in mind that the expire time you given first
    // will be also update whenever you update the cookie

    
    setcookie('youtube','zahid Khattak',time()+600);

    echo $_COOKIE['youtube'];
?>