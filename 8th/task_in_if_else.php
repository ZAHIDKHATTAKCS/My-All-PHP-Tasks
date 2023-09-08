<?php

$age=12;
echo "<h1>Age is 12 here </h1>";
if($age==5){
    echo "This is baby";
}
elseif($age==12)
{
    echo "This is tenager <br>";
}
elseif($age==23)
{
    echo "This is an adult";
}
elseif($age>=50)
{
    echo "This is older";
}
else{
    echo "allah jani";
}


// 2nd program 

$num=45;
echo "<h1>Here number is 45</h1>";
if($num % 2==0) 
{
    echo "The number is multiple of 2 <br>";
}
elseif($num % 3==0)
{
    echo "The number is multiple of 3 <br>";
}

elseif($num % 4==0)
{
    echo "The number is multiple of 4 <br>";
}

elseif($num % 5==0)
{
    echo "The number is multiple of 5 <br>";
}
else 
{
    echo "allah jani kia hoga pir ";
}
?>