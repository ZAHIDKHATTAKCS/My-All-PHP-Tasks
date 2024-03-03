<?php
    // just like in update we don't have a specific function for update it so in delete
    // also same is for delete we don't have //      ///       // delete a cookie
    // in delete you have to use set cookie function the name of the cookie you created first give it 
    // here and value here must be Null and give time in negative numbers so it will be deleted
    // but keep in mind that only cookies are delete that have the name like you given like in this case i want to 
    // delete all the cookies which having name youtube
    
    setcookie('youtube',NULL,time()-2334);
?>