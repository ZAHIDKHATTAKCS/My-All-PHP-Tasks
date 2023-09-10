<?php

// now pracitce on switch statment

$day="Sunday";

switch ($day)
{
    case "Monday": echo '<h1>Today is Monday and you have Six classes to attend at University be ready on 8:00 Am</h1>';
    break;

    case "Tuesday": echo '<h1>Today is Tuesday and you have Five classes to attend at University be ready on 8:00 Am</h1>';
    break;

    case "Wednesday": echo '<h1>Today is Wednesday and you have four classes to attend at University be ready on 8:50 Am</h1>';
    break;

    case "Thursday": echo '<h1>Today is Thursday and you have four classes to attend at University be ready on 9:00 am Am</h1>';
    break;

    case "Friday": echo '<h1>Today is Friday and you have only Presentation to deliver at University be ready on 10:00 Am</h1>';
    break;

    case "Saturday": echo '<h1>Today is Saturday and you have no classes to attend at University Enjoy your Holiday!</h1>';
    break;

    
    case "Sunday": echo '<h1>Today is Sunday and you have no classes to attend at University Enjoy your Holiday! with your family</h1>';
    break;

    default: echo '<h1>Sorry we can not recognize the day name </h1>';

}

?>