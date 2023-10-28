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
            <form action="" method="POST">
                <div class="row">
                    <input type="text" name="fullname" placeholder="Enter your name *" required />
                    <input type="text" name="qualification" placeholder="Enter your Qualification *" required />
                </div><br>

                <div class="row">
                    <input type="text" name="mobile" placeholder="Enter your Mobile number *" required>
                    <input type="text" name="email" placeholder="Enter your Email *" required />
                </div><br>

                <div class="row">

                    <input type="text" name="reference" placeholder="Any reference *" required />

                    <!-- here you have to make the disabled button by only property of readonly if you create it by disabled this will not work properly -->
                    <input type="text" name="jobpost" value="webdeveloper" placeholder="Web Developer *" readonly />

                </div><br><br>
                <button type="submit" name="submit">Register</button>


                <!-- <button type="button" value="submit">Check Form</button><br><br> -->

            </form>
            <!-- form end here -->
        </div>
    </center>
</body>

</html>



<!-- Today we will learn about how we can insert data to database table using PHP -->
<?php

/*
when the user click on button or link which name vlaue 
is same to the given post value like in my case here is submit then perform below oeprations
*/


include './connection.php';

if (isset($_POST['submit'])) {

    // PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post"

    // we have to catch the values of input fields by their name attirbute
    $name = $_POST['fullname'];
    $Degree = $_POST['qualification'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $refer = $_POST['reference'];
    $Job_post = $_POST['jobpost'];

    // here we used query for inserting these values to database 
    $insertquery = " INSERT INTO job_registraion(`Id`, `Name`, `Degree`, `Mobile`, `Email`, `Refer`, `Job_post`) VALUES ('','$name','$Degree','$mobile','$email','$refer','$Job_post')";

    $result = mysqli_query($connection, $insertquery);

    if ($result) {
?>
        <script>
            alert("data is inserted properly")
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("data is not inserted properly")
        </script>
<?php
    }
}
?>