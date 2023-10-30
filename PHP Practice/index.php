<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form For Practice</title>
    <style>
        form {
            width: 43%;
            border: 2px solid green;
            border-radius: 10px;
            text-align: center;
            background-color: lightgray;
        }

        .row1,.row2{
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }
        h2{
            color: blue;
        }
        a{
            color:black;
            text-decoration:none;
            padding:2px;
            background-color:white;
            border:1px solid black;
            border-radius:5px;
        }
    </style>
</head>

<body>
    <center><br><br>
    <form action="" method="POST">
            <h2>I just create this form for practice after learning insertion in PHP</h2>
            <br><br>
            <div class="row1">
                <div>
                    <label for="fname">First_Name</label>
                    <input type="text" placeholder="Enter your First name *" name="fname" required/>
                </div>
                <div>
                    <label for="lname">Last_Name</label>
                    <input type="text" placeholder="Enter your Last name *" name="lname" required/>
                </div>
            </div>
            <div class="row2">
                <div>
                    <label for="rn">Roll_Number</label>
                    <input type="text" placeholder="Enter your Roll Number *" name="rn" required />
                </div>
                <div>
                    <label for="section">Section</label>
                    <input type="text" placeholder="Enter your Section *" name="section" />
                </div>
            </div><br><br>
            <button type="submit" name="submit">Submit</button><br><br>
            <a href="retreive.php">Check data here</a><br><br>
        </form>
    </center>
</body>

</html>

<?php

include('connection.php');

if (isset($_POST['submit'])) {

    $First_Name = $_POST['fname'];
    $Last_Name = $_POST['lname'];
    $Roll_Number = $_POST['rn'];
    $Section = $_POST['section'];

    $insert = "INSERT INTO `students`(`Id`, `First_Name`, `Last_Name`, `Roll_No`, `Section`) VALUES ('','$First_Name','$Last_Name','$Roll_Number','$Section')";

    $result = mysqli_query($conn, $insert);

    if (!$result) {
?>
        <script>
            alert("Data is inserted successfully");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Data inserted Successfuly to the database");
        </script>
<?php
    }
}
?>