<?php

// foreach loop is only used in array it is the shortcut of the for loop we used to get data from array and show it in whatever form we want

$students=array("A","B","C","D","E");


// foreach($array as $value)
foreach($students as $names){
    echo $names.' '; // here we can use space and break for better format
}


echo '<ol>';

foreach($students as $name){
    echo '<li>'.$name.'</li>';
}

echo '</ol>';

echo '<pre>';

print_r($students);

echo '</pre>';
?>