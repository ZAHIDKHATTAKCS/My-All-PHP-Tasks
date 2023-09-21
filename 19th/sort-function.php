<?php 

// as we know sort is used for sorting data in Asscending or desinding order for that we have php sort function let's learn about it

$home=array('zahid','khattak');

sort($home);

/*

sort is used for sorting in Asscending order and there is another funtion with only r mean rsort($home) which is stand for reverse sorting that is used for descending order

*/

// this loop is used for showing the array elments or values one by one

foreach($home as $name){
    echo $name." ";
}

// rsort($home);

// foreach($home as $Myname){
//     echo $Myname.' ';
// }
?>