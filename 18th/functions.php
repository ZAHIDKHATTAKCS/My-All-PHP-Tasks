<?php 

// Today learn about functions in PHP, if we want to create a function in PHP so for this we have to write function and function  name that's it follow by the parenthesis


// for the function name we can only used letters and underscore at the start of function name and we can write numbers after first letter
function PrintMyName(){
    echo '<h1>My name is Zahid khattak</h1>';
}

echo PrintMyName();

function sum(){

    $a=4;
    $b=5;
    echo '<h1>The first number is = '.$a.'</h1>';
    echo '<h1>The second number is = '.$b.'</h1>';

    echo '<h1>The sum of these two numbers is = '.$a+$b.'</h1>';
}
sum();
?>