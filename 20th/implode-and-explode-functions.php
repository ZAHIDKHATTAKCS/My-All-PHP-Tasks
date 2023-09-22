<?php 

// Implode is used for change the array to the string simply the syntax of this function is implode(" ",$array); it's means that we only want spaces in between each element of the string thats why we only put " ", space in between commas and then array name that's it

$numbers=array("one","two","three","four","five");

echo '<pre>';
print_r($numbers);

echo "My phone number is ". implode(" ",$numbers).'.';

echo '</pre>';


// And Explode is the opposite of the implode mean Explode function is used for change the string to array the syntax is 

$colors="My favorite colors are red green blue and white";

// there are two value to pass in explode function the one is delimiter mean in which way you want to split it to string mean you want space in between or pipe symbol | in between etc


$result=explode(" " , $colors);

// at this stage we all know that array is not showing by using echo because it's an array to show an array we have to use loop so for that we used loop here 
// echo $result; this command is totally wrong we have to use print_r function or proper loop to show an array

echo '<pre>';
print_r($result);


// foreach($result as $value){

//     echo $value;
// }


?>