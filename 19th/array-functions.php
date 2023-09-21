<?php 


/*
There are some array functions which are given below

1. array_pop function , this function removes an element from the end of an array
2. array_push function, this function adds an element to the end of an array
3. array_shift function, this function removes an element from the beginning of an array
4. array_unshift function, this function adds an element to the beginning of an array.


so now we have to use and learn one by one 


*/

$students=array('one','two','three','four','five','six'); // creating an array with fill some data


echo '<h1>simple create an array</h1>';
 echo '<pre>';
 print_r($students);

 echo '</pre>';

echo '<h1>after using array pop function for deleting last element of the array</h1>';
array_pop($students);
echo '<pre>';
print_r($students);

echo '</pre> <br><br>';


// now array_push() function so here it is, the syntax is array_push(array,var);


echo '<h1>Now using array_push function to adding a new element to the array</h1>';

array_push($students,'six');

echo '<pre>';
print_r($students);

echo '</pre>';


// now using array_shift() function, the syntax is array_shift(array) as we all know array shift function removes an element from the begining of the array


echo '<h1>Now using array_shift function to removing an element from the very begining of the array</h1>';

array_shift($students);

echo '<pre>';
print_r($students);

echo '</pre>';


// now using array_unshift() function, the syntax is array_unshift(array,value) as we all know array unshift function adding an element to the begining of the array


echo '<h1>Now using array_unshift function to adding an element to the very begining of the array</h1>';

array_unshift($students,'ONE');

echo '<pre>';
print_r($students);

echo '</pre>';

?>