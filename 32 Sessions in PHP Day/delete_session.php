<?php
    //  you may want to delete the session but you must write first line is session_start() like here

    session_start();

    // session_destroy(); fnt is used for delete all the session, now if somone wants only
    // delete on key value pair for example if someone want to delete the session of username only so for this
    // we have unset($_SESSION['username']);

    // unset($_SESSION['username']);

    // if you run the session_destroy(); fnt its mean you not only delete one but you delte all the sessions


?>