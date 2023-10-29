<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retreiving data into table</title>
    <style>
        h2{
            color:blue;
            font-size:20px;
            text-align:center;
        }
        .main-div{
            background-color:skyblue;
            width:100%;
            display:flex;
            justify-content:center;
        }
        table{
            background-color:white;
            margin:10px;
            border:2px solid red;
            width:100%;
        }
        th{
            /* border:1px solid black; */
            padding:5px;
        }
        td{
            pading:4px;
            /* border:1px solid black; */
        }
        img:hover{
            cursor: pointer;
        }
        img{
            filter:green;
        }
    </style>

</head>
<body>
    <h2>List of condidates for Web Developer Job</h2>
    <center>
    <div class="main-div" align="center">
        <div class="table-div" >
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Degree</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Reference</th>
                        <th>Job_Post</th>
                        <th colspan="2">Operations</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                    include 'connection.php';

                    $selectquery = "Select * from job_registraion";

                    $connect = mysqli_query($connection, $selectquery);

                    // $num = mysqli_num_rows($connect);
                    // echo $num . '<br>';

                    while ($fetching = mysqli_fetch_array($connect)) {
                        ?>
                            <tr>
                                <td><?php echo $fetching['Id']?></td>
                                    <td><?php echo $fetching['Name']?></td>
                                    <td><?php echo $fetching['Degree']?></td>
                                    <td><?php echo $fetching['Mobile']?></td>
                                    <td><?php echo $fetching['Email']?></td>
                                    <td><?php echo $fetching['Refer']?></td>
                                    <td><?php echo $fetching['Job_post']?></td>
                                    <td>
                                        <img src="./assets/icons/edit-regular.svg" alt="edit icon" width="20px">
                                    </td>
                                    <td><img src="./assets/icons/delete icon.svg" alt="delete icon" width="20px"></td>
                                </tr>

                        <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    </center>

</body>
</html>
