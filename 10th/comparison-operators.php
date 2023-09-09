<?php

// today learning about comparison operators like equal to , less than or equal to etc etc.

$num1=3;
$num2=3;
echo '<h2>using Comparison Operator</h2>';
if($num1==$num2)
{
    echo  $num1 . ' is equal to '.$num2.'<br>';
}
else
{
    echo $num1. ' is not equal to '.$num2;
}

// now for not equal

echo '<h2>using not equal Comparison now</h2>';

$num3=3;
$num4=5;
if($num3!=$num4)
{
    echo $num3. ' is not equal to '.$num4;
}
else
{
    echo $num3. ' is equal to '.$num4;
}



// now for greater than

echo '<h2>using greater than Comparison now</h2>';

$num5=5;
$num6=4;
if($num5>$num6)
{
    echo $num5. ' is greater than '.$num6;
}
else
{
    echo $num5. ' is less than '.$num6;
}

// now for greater than

echo '<h2>using greater than Comparison now</h2>';

$num7=3;
$num8=4;
if($num7<$num8)
{
    echo $num7. ' is less than '.$num8;
}
else
{
    echo $num7. ' is grater than '.$num8;
}


// now for greater than or equal to 

echo '<h2>using greater than or equal to Comparison now</h2>';

$num9=4;
$num10=4;
if($num9>=$num10)
{
    echo $num9. ' is equal to '.$num10;
}
else
{
    echo $num9. ' is less than '.$num10;
}
?>