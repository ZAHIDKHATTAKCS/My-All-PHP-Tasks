<?php 

// Now learn about Function default value in PHP

// default value is the type of value that is initialize in function while in function delcaration like if someone's wants to multiple two number may be he forget to pass two arguments in function instead of that he pass only one value so the defualt value will be multiply with the value that user pass if he pass two values the the default value will be override and instead of default vlaue these two values will be multiplied with each other

function multiplication($a,$b=5){
    $result=$a*$b;

    echo "The First number is = {$a} <br>";

    echo "The Second number is = {$b} <br>";

    echo "The Multiplication of these two numbers is = {$result} <br><br><br>";
}
multiplication(12,3);

// now if someone mistakenly pass one value in function so the default value will be multiplied and we have 5 default value for this case so

multiplication(4);

?>