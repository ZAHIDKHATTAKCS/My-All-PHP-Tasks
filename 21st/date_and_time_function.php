<?php 

echo '<h2>Day in a Month</h2>';
echo date("d")."</h3>"; //small d is for day in a month mean it will show the current day in a month mean 23,24 etc

echo '<h2>Textual day in a Month</h2>';
echo date("D")."</h3>"; // capital D is for show textual day in a month mean fri sat etc

echo '<h2>Full Textual day in a Month</h2>';
echo date("l")."</h3>"; // small l is for show full textual day in a month mean friday saturday etc

echo '<h2>Current time of the day</h2>';
echo date("h:i:s:a")."</h3>";// here small h is used for hours in 12 hours format, and small i is for minutes and s for seconds and small a is for show am/pm in small and Capital A is used for Caital AM/PM instead of it


echo "<h4>Here is the use of Capital H means show the hours in format 24hours</h4>";
echo date("H:i:s A  l d M")."</h3>";


echo "<h2>Check current timezone</h2>";
echo "To check what is the current timezone in this program so we have to use this builtin function in PHP</br>";
$currenttimezone=date_default_timezone_get();
echo "The current defualt timezone in this program is {$currenttimezone}";



?>