<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showing inserted data</title>
    <style>
        table{
            border:1px solid red;
        }
    </style>
</head>
<body>
    <div class="main-div" align="center">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th colspan="2">Operations</th>
                </tr>
            </thead>
            <tbody>

            <?php 
    include('connection.php');

    $selectionquery="select * from employes";

    $integerate= mysqli_query($conn,$selectionquery);

    while($result=mysqli_fetch_array($integerate)){
        ?>

<tr>
                    <td><?php echo $result['id'] ?></td>
                    <td><?php echo $result['Name'] ?></td>
                    <td><?php echo $result['Address'] ?></td>
                    <td><a href="updatepage.php?id=<?php echo $result['id'] ?>">Edit</a></td>
                    <td><a href="index.php">delete</a></td>
                </tr>
                <?php 

    }
?>
                
            </tbody>
        </table>
    </div>
</body>
</html>