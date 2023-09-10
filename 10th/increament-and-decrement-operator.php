<?php


// increament and decreament is used for adding 1 or minus 1 from the value 

// there are some types of increament operator and as well as decreament operator like

// pre increament, post increament , pre decreament and post decreament now look at the examples

// first of all pre increament example

$a=2;
$c=5;
// the dots before $a in the given statment is used for concatination

echo '<h1>Here is the use of pre increament </h1>' .++$a. '<br>';

// As we all know that in pre increament 1 is added to the value first than show the output here so

// now learning about post increament in the post increament the 1 is added in value after compilation of the code

echo '<h1>Here is the use of post increament </h1>'.$c++.'<br>';

// it will show first same value than it add one because it's post increament now check here output

echo $c;



// now learning about pre decreament as we all know decreament is used for minus 1 from the value 

$b=2;
echo '<h1>Now we used pre decreament here</h1>'.--$b.'<br>';

// now we learn about post decreament 

echo '<h1>Now we are decreament value by post decreament method</h1>'.$b--.'<br>';

echo '<h1>Now learning about simple post increament operator in simple way</h1>';

$w=2;

echo $w++.'<br>';
echo $w;
?>