<?php

// Today learing about switch statment it is used for when there are multiple conditions and one to be executed

$favcolor="red";
switch ($favcolor)
{
    case "blue": echo '<h1>your favorite color is blue</h1>';
    break;

    case "red": echo '<h1>Your favorite color is red</h1>';
    break;

    case "green": echo '<h1>Your favorite color is green</h1>';
    break;

    case "yellow": echo '<h1>Your favorite color is yellow</h1>';
    break;

    case "pink": echo '<h1>Your favorite color is pink</h1>';
    break;

    default: echo "<h1> sorry ! I don't know about your favorite color</h1>";
}

?>