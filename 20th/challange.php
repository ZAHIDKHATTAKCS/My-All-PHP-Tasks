<?php 

// merge two arrays and remove duplicates and show result

$array1=array("blue","red","green","yellow");
$array2=array("blue","black","brown","yellow","red");

$merge=array_merge($array1,$array2);

echo '<pre>';
print_r($merge);


// and array_unique function you must pass only one argument to show that i removed duplicates for that you have to store both arrays in one variable
$removeduplicates=array_unique($merge);


echo '<pre>';
print_r($removeduplicates);


?>