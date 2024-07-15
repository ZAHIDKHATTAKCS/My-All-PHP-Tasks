<?php

    $file = $_GET['file'] . ".pdf";

    header("content-disposition: attachment; filename=" . urlencode($file));

    // now to read file
    $fb = fopen($file, "r");

    while(!feof($fb)){
        echo fread($fb , 8192);

        // this function is used to better download
        flush();
    }
        fclose($fb);


?>