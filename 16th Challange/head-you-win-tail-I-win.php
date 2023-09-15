<?php

// today learn about how to create a random number and how to create toss coin for use , using PHP

$RandomNumber=rand(1,2);

if( $RandomNumber == 1){
    echo "<h1> {$RandomNumber} Head You Win!</h1>";
}
else{
    echo "<h1> {$RandomNumber} Tail I Win!</h1>";
}
?>