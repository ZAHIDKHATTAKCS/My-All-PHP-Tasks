<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice of retreiving data</title>
    <style>
        table{
            background-color:white;
            border:2px solid red;
        }
        td{
            padding:3px;
        }
        tr:hover{
            background-color:lightgray;
            cursor: pointer;

        }
        body{
            background-color:lightblue;
        }
        h2{
            color:brown;
        }
        .main-div{
            margin-top:200px;
        }
    </style>
</head>
<body>
    <center>
       <div class="main-div">
    <table>
    <h2>Selected condidates for the Internship</h2>
        <thead>
            <tr class="thead">
                <th>Id</th>
                <th>First-Name</th>
                <th>Last-Name</th>
                <th>Roll-Number</th>
                <th>Section</th>
                <th colspan="2">Operations</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connection.php';

            $selectquery = "select * from students";

            $connectionquery = mysqli_query($conn, $selectquery);


            while ($fetch = mysqli_fetch_array($connectionquery)) {
        ?>
            <tr>
                <td><?php echo $fetch['Id']; ?></td>
                <td><?php echo $fetch['First_Name']; ?></td>
                <td><?php echo $fetch['Last_Name']; ?></td>
                <td><?php echo $fetch['Roll_No']; ?></td>
                <td><?php echo $fetch['Section']; ?></td>
                <td class="operation">Edit</td>
                <td class="operation">Delete</td>
            </tr>
        <?php 
}

        ?>
            
        </tbody>
    </table>
    </div>
    </center>
</body>
</html>