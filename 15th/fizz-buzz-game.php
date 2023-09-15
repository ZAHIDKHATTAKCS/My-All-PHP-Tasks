<?php

$a;
for($a=1; $a<=100; $a++)
{
    
    if(($a % 5 == 0) and ($a % 3 == 0)){
        echo "<h3>FIZZ BUZZ</h3>";
    }
    elseif($a % 5 == 0)
    {
        echo "<h3>BUZZ</h3>";
    }
    elseif($a % 3 == 0){

        echo "<h3>FIZZ</h3>";
    }
    else{
        echo '<h3>'.$a.'</h3>';
    }
}
?>