<?php
// php coding challenge is to list all of the multiples of 12 which are less than or equal to 240. you must complete this task twice, once using a while loop, DO While loop and using For loop too.

// $a=12;
// $f=1;

// while($f<=240){
//     echo "12 * {$f} = {$a} <br>";
//     $a+=12;
//     $f++;
// }

$b=12;
$r=1;

do{
    echo "12 * {$r} = {$b} &nbsp; &nbsp; &nbsp; using do while loop <br><br>";
    $b+=12;
    $r++;
}while($r<=240);

// now using for loop to do this task

// $k;
// $i=12;
// for($k=1; $k<=240; $k++)
// {
//     echo "12 * {$k} = {$i} &nbsp;&nbsp;&nbsp; using for loop now <br><br>";
//     $i+=12;
// }
?>