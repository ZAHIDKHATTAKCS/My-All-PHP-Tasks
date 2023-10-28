<!-- php start here -->

<?php

include("connection.php");
/* 
1. today learn about how to create database and table in Phpmyadmin through queries 
2. also learn about how to create form and how to connect it with database
*/

?>
<!-- php end here -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operations using form</title>
    <style>
        .form {
            width: 50%;
            border: 1px solid red;
            border-radius: 40px;
            background-color: beige;
            margin-top: 50px;
        }
    </style>
</head>

<body>


    <center>
        <div class="form">

            <h2 style="color: red;" align="center">Welcome</h2>
            <p align="center">Please fill all the details carefully. <br> This form can change your life.</p>
            <h4 align="center">Appy for Web Developer Post</h4>

            <!-- form start here -->
            <form action="" method="post">
                <div class="row">
                    <input type="text" name="Name" placeholder="Enter your name *" required />
                    <input type="text" name="qualification" placeholder="Enter your Qualification *" required />
                </div><br>

                <div class="row">
                    <input type="text" name="mobile" placeholder="Enter your Mobile number *" required >
                    <input type="text" name="email" placeholder="Enter your Email *" required />
                </div><br>

                <div class="row">

                    <input type="text" name="reference" placeholder="Any reference *" required />
                    <input type="text" name="Name" placeholder="Web Developer *" disabled />

                </div><br><br>
                <button type="button" value="submit" align="center">Register</button><br><br>

                <button type="button" value="submit">Check Form</button>

            </form>
            <!-- form end here -->
        </div>
    </center>
</body>

</html>

<?php 



?>