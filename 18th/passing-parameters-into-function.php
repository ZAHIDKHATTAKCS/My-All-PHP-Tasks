<?php 

// Now learn about how to pass the parameters into functions

// first simple function
function Add($a,$b){
    $sum = $a+$b;

    echo '<h1 style="color:green; margin-left:40px;">Addition</h1>';

    echo 'The First number is = '.$a.'<br><br>';
    echo 'The Second number is = '.$b.'<br><br>';

    echo 'The Sum of these two numbers is =  '.$sum.'<br>';

    echo "-------------------------------------------------<br>";
}
Add(30,30);
Add(400,400);

// now passing arguments to the function

// when we creating function and put some variable during creation that is called parameters
function sub($a,$b){ // this is function parameters

    $subtraction = $a-$b;

    echo '<h1 style="color:green; margin-left:40px;">Subtraction</h1>';

    echo 'The First number is = '.$a.'<br><br>';
    echo 'The Second number is = '.$b.'<br><br>';

    echo 'The Sum of these two numbers is =  '.$subtraction.'<br>';

    echo "-------------------------------------------------<br>";
}

// when we want to call it and passing values now that is called arguments
sub(10,5); // this is funtion aruguments

// now if someones wants to change the arguments they can only call function like

sub(2,3);


Add(500,5090);
?>