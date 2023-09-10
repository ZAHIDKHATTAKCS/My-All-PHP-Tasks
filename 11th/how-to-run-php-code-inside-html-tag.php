<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic data through php</title>
</head>
<body>
    
    <form method="POST">
        
    Enter your favorite color : 

    <input type="text" name="favcolor" style="width: auto; height:30px;" />
        <button type="submit" name="submit" style="font-size:20px;">Check now</button>
    </form>

    <p> 
        <?php
            if(isset($_POST['submit']))
            {
                $FavColor=$_POST['favcolor'];
                switch ($FavColor)
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
            }
        ?>
    </p>
</body>
</html>