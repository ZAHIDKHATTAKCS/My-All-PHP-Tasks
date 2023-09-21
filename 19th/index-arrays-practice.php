<?php 

$names=array("Amir Hamza","Zahid Khattak","Ahmad Zahid","Huzaifa Khan","Ali","Khan");



// in order to show the content of the array we have to use print-r() function to show all the content of the array and the pre tag is used for format it in good way
echo '<pre>';
print_r($names);
echo '</pre>';

// now if someone asked to print the name of the 4 index for that we can use the index number within the array name like given below

echo "<h3>{$names[4]}</h3>";

// now someone asked about how many number of values are stored in this array how we can find it for that we can use the count function in order to count the number of values in the array

echo 'The number of values in the array is ='.count($names);

// now if someone asked about how can we show it in a list we already now about lists in html like Order list and unorder list , so for this we have to use loop like given below

echo "<ol>";
for($i=0; $i<=5; $i++){
    echo '<li>'.$names[$i].'<br></li>';
}
echo '</ol>';

?>