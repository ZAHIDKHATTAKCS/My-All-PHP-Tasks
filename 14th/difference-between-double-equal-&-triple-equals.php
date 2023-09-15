<?php
// today learn the difference in between double equal and triple equals in PHP

// double equal only check the values of variables like given below

$a=5;
$b='5';

// if($a==$b){
//     echo "both have the same values";
// }
// else{
//     echo "Bothe are equal but the data type is not equal";
// }


// and triple equals check the values of variables as well as it check the data types also of both variables if both are same values and data types that will true than

if($a === $b){
    echo "the values of both are same and data types as also same";
}
else{
    echo "The values are same of both but the data types are not  same of both";
}
?>