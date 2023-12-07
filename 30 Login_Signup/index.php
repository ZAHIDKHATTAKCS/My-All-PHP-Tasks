<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="output.css">
    <style>
        body{
            background-image: url('assets/bg images/1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="flex justify-center">

            <?php 
                 include 'connection.php';

                if(isset($_POST['submit'])){
                    $full_name=mysqli_real_escape_string($conn,$_POST['name']);
                    $email=mysqli_real_escape_string($conn,$_POST['email']);
                    $phone_number=mysqli_real_escape_string($conn,$_POST['pnumber']);
                    $password=mysqli_real_escape_string($conn,$_POST['password']);
                    $rpassword=mysqli_real_escape_string($conn,$_POST['rpassword']);

                    // encrypt password

                    $encrypt_password= password_hash($password, PASSWORD_BCRYPT);

                    // now encrypt repeat password
                    $encrypt_repeat_password=password_hash($rpassword, PASSWORD_BCRYPT);

                    $selectionquery="select * from registration where Email_Address = '$email' ";

                    $fetching=mysqli_query($conn,$selectionquery);

                    // find if email already exists
                    $emailcounts= mysqli_num_rows($fetching);

                    if($emailcounts > 0){
                        ?>
                        <script>
                            alert('Email already exists');
                        </script>
                        <?php
                    }
                    else{
                        if($password === $rpassword){

                            $insertionquery="INSERT INTO `registration`(`id`, `Full_Name`, `Email_Address`, `Phone_Number`, `Password`, `Confirm_Password`) VALUES ('','$full_name','$email','$phone_number','$encrypt_password','$encrypt_repeat_password')";

                            $insertion= mysqli_query($conn,$insertionquery);
                            if($insertion){
                                ?>
                                <script>
                                    alert('Data Inserted');
                                </script>
                                <?php
                            }
                            else {
                                ?>
                                <script>
                                    alert('Data not Inserted');
                                </script>
                                <?php
                            }
                        }
                        else{
                            ?>
                        <script>
                            alert('Double check your Password, its not matching');
                        </script>
                        <?php
                        }
                    }
                }
            ?>

    <div class="border border-blue-500 rounded-lg mt-16 w-[500px] h-fit bg-gray-300 shadow-md shadow-black flex flex-col items-center">
        <h1 class="text-lg mt-2">Create Account here </h1>
        <button class="bg-orange-400 hover:bg-orange-500 mx-3 flex items-center justify-between p-1 mt-2 rounded-lg text-white">
            <img src="./assets/icons/google.png" width="30px" alt="google icon">
            Login via google
        </button>
        <button class="bg-blue-400 hover:bg-blue-500 mx-3 flex items-center justify-between p-1 mt-2 rounded-lg text-white">
            <img src="./assets/icons/facebook.png" width="30px" alt="google icon">
            Login via Facebook
        </button>

        <form action="" method="POST" class="mt-2 p-5 w-full">
            <div class="mt-2">
                <label for="Name" class=""> Name</label>
                <input type="text" name="name" class="border border-gray-400 w-full rounded-md h-8" required placeholder=" Enter your Full Name">
            </div>
            <div class="mt-2">
                <label for="Email" class=""> Email_Address</label>
                <input type="email" name="email" class="border border-gray-400 w-full rounded-md h-8" required placeholder=" Email Address">
            </div>
            <div class="mt-2">
                <label for="Phone Number" class="">Phone Number</label>
                <input type="text" name="pnumber" class="border border-gray-400 w-full rounded-md h-8" required placeholder=" Phone Number">
            </div>
            <div class="mt-2">
                <label for="Password" class=""> Password</label>
                <input type="password" name="password" class="border border-gray-400 w-full rounded-md h-8" required placeholder=" Password">
            </div>
            <div class="mt-2">
                <label for="Repeat Password" class=""> Repeat Password</label>
                <input type="password" name="rpassword" class="border border-gray-400 w-full rounded-md h-8" required placeholder=" Repeat Password">
            </div>

            <div class="flex justify-center">
                <button type="submit" name="submit" class="bg-green-500 hover:bg-green-600 mx-3 flex items-center justify-between p-1 mt-2 rounded-lg text-white">
                    Create Account
                </button>
            </div>
        </form>
    </div>
</body>
</html>