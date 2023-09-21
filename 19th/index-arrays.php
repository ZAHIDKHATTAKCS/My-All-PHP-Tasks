<?php
// There are three types of arrays in PHP 
/*
 1. indexed arrays 
 2. Associative arrays
 3. Multidimensional arrays
*/


// first of all we learn about Indexed arrays

$names=array("A","B","C","D","E","F");

 echo "<pre>"; // As we all know the Pre tag in html is used for the preformatted text mean that the content inside that tag will show as it written we used here for show the given array in a good format with index number as well as with values


print_r($names); // Print-r in PHP is used for display and show the content of a variable

echo '<br><br>';

/* 

to adding a new vale/element to an array we can use two ways the one is we can add it simply by write it after the last value ("F","G")

the second way is we can add an element/value to the array by the given way mean using indexed number to add new one
*/

$names[6]="G";


print_r($names);
echo '<br><br>';

print_r($names[2]); // instead of this we can also used echo $names[3]

echo '<br><br>';

// now if we want to count only the number of values in array mean not indexes only show number of values stored in array so we can do like that

$arraycount=count($names); // This will show us the number of values in array

echo 'Total number of values in array '.$arraycount; // This will show us 7 because we have 7 values and the index number is 6 because the index number is starting from 0

echo '<br><br>';

echo '<ol>';  // if we have to show it in order list so we can do it using this way

for($i = 0; $i < 6; $i++){
    echo '<li>'.$names[$i]."</li><br><br>";
} 

echo '</ol>';
?>