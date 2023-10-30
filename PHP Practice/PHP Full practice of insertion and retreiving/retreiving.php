<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Now retreiving</title>
    <style>
        table{
            border:1px solid red;
            border-radius:20px;
            background-color: lightgreen;
        }
        th{
            padding:5px;
        }
        tr{
            padding:20px;

        }
        td{
            padding:5px;
        }
        .operation:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h3 style="color:brown; text-align:center;">Selected Condidates for Teaching</h3>
    <table align="center">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Subject that teaching</th>
                <th colspan="2">Operations</th>
            </tr>
        </thead>
        <tbody>
                <?php 

include('connection.php');

$selectquery= "select * from teachers";

$connection=mysqli_query($conn,$selectquery);

while($fetch=mysqli_fetch_array($connection)){
?>
                <tr>

                <td><?php echo $fetch['Id'] ?></td>
                <td><?php echo $fetch['Name'] ?></td>
                <td><?php echo $fetch['Course_Teaching'] ?></td>
                <td class="operation">Edit</td>
                <td class="operation">Delete</td>
                </tr>
    <?php
}
?>
        </tbody>
    </table>
</body>
</html>