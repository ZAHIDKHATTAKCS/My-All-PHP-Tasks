<?php

// Today we learning about Conditional Statements mean If else statments

echo "<h1>If statment</h1>";

$day="Sunday";

if($day=="Sunday")
{

    echo "Today is holiday";
}


// Now using if else statment
echo "<h1>Now If Else statment</h1>";

$today="Monday";

if($today=="Sunday")
{
    echo "Today is Holiday";
}
else 
{
    echo "You have to go to school today <br><br>";
}


// now if else statment for mutliple of 2

echo "<h1>Now applying if else statment on table</h1>";
$num=11;

echo "The number is 11 <br>";

if($num % 2 == 0)
{
    echo "the number is multiple of 2";
}
else 
{
    echo "the number is not the multiple of 2";
}
?>