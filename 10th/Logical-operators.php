<?php

// now learning about logical operators

$num1=4;
$num2=5;
$num3=4;

echo '<h1>Using OR operator in</h1>';

// in OR operator if one is true than it will return true statment

if($num1==$num2 or $num1<$num2)
{
    echo $num1 . ' is less than '.$num2.'<br>';
}
else
{
    echo $num1. ' is equal to '.$num2;
}

echo '<h1>Using AND operator in</h1>';

// in AND operator both must be true than it will return true statment otherwise false

if($num1==$num3 and $num3<$num2)
{
    echo $num1. ' is equal to '.$num3. ' and '. $num3.' is less than '.$num2;
}
?>