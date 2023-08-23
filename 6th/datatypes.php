<?php


// data types in php

echo "Data types in PHP";
echo "<br><br> ";
/* 
as we know about we can't assign int , float , double etc in variable so how we know that how many data types in php for that you have to assign the values only in the data type like the given value is integer so this variable is type of integer
*/
$num = 2;

echo "Integer <br>";
echo "The given number is stored in the integer variable <br>";
echo $num;

echo "<br><br>";


/*

this variable is the type of string its because of we assign the string value thats why we can call it string variable

*/

$name= "zahid khattak";
echo "String <br>";

echo "The given name is stored in the type string variable <br>";
echo $name;
echo "<br><br>";

$float=3.14;


echo "float <br>";

echo "The given number is stored in the type float variable <br>";

echo "$float";

echo "true and false mean Boolean data type <br><br><br>";

// array
echo "Array <br>";
$array = array("zahid","Khattak","474","village Qadri Banda");
echo "The given is the array index number 0 value <br>";
echo "$array[0]";
echo "<br> <br>";

echo "The given is the array index number 3 value <br>";

echo "$array[3]";
?>