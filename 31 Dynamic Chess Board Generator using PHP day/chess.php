<?php
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
</head>
<style>
table {
    border: 1px solid black;
    border-spacing: 0;
}

td {
    padding: 20px;
    border: 1px solid black;
}

.bgcolor {
    background-color: black;
}
</style>

<body>
    <tbody>
        <form action="" method="POST">
            <input type="text" name="ChessBoard" required>
            <input type="submit" name="submit" value="Generate Chess Board">
        </form><br><br><br>
        <table>
            <?php
            
            if(isset($_POST['submit'])){
                $data=$_POST['ChessBoard'];
                
                for($row=1; $row<=$data; $row++){
                    echo "<tr>";
                    
                    for($col=1; $col <=$data; $col++){
                        if(($row + $col) % 2 == 0){
                            echo "<td class='bgcolor'> </td>";
                        }
                        else{
                            echo "<td></td>";
                        }
                    }
                    echo "</tr>";
            }
            }
            ?>
        </table>
    </tbody>

</body>

</html>