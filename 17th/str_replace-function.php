<?php

// str_replace() this function is used for when we want to replace string with another string


// there are three parameters in str_replace("Search","Replace","Subject"); function , in the search place you have to write the word that you want to change , in the replace you have to write that word you want to show instead of old one, and the subject place you have to write the string or sentence in which you want changes like given below

echo str_replace("kahttak","Khattak","Zahid kahttak").'<br>';

// Note: the str_replace() function is casesensitive , if the subject word is written in the capital you must write it capital in the search place also if lowwer than you have to write it in lowwer case


// Note : if want to avoide casesensitive so there is another function that PHP offers called case insensitive and we can call as str_ireplace(); in this function (ireplace) word in which i mean insensitive case so now you can simply search by any capitilaization mean if the word is in captial you can search it in lowwer if lowwer you can search it by capital that's it

echo str_ireplace("KhAtTaK","Zahid","Muhmmad Khattak").'<br>';


// now if we got some data from the database like given and we have to change it 

$names="Zahid|Khattak|Techzone|Usman GUl";

// now it will print the ("pipes | ") as well and this will be very boring on webpage and i want to change it to commas "," so for that purpose we can used str_ireplace/replace() function now check

echo str_ireplace("|"," , ","$names");

?>