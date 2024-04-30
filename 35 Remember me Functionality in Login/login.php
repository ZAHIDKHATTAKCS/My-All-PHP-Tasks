<?php
session_start();
ob_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Login</title>
<style>
    body{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
        font-family: Arial, Helvetica, sans-serif;
    }
    .container{
        width:500px;
        padding: 30px;
        background-color:lightcyan;
        box-shadow: 4px 4px 15px yellow;
        border:2px solid red;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 20px;
    }
    form{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 10px;
    }
    button{
        border: 2px solid black;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Create Account</h2>
    <p>Get started with free account</p>
    <button type="submit" class="mb-3 btn btn-warning border border-dark">
        <i class="fab fa-google"></i>
        Signup Via Google
    </button>
    <button type="submit" class="mb-3 btn btn-primary border border-dark">
        <i class="fab fa-facebook"></i>
        Signup Via facebook
    </button>

    <span style="color: gray;"> -------------- OR -------------- </span>

    <!-- form starts -->
    <form action="" method="post">

        <!-- Email input -->
        <div class="input-group mt-4 ">
            <i class="input-group-text fas fa-envelope"></i>
            <input type="email" name="email" class="form-control" placeholder="Enter your Email address" required value="<?php if (isset($_COOKIE['Emailcookie'])) {
                echo $_COOKIE['Emailcookie'];
            }  ?>">
        </div>

        <!-- Password input -->
        <div class="input-group">
            <i class="input-group-text fas fa-lock"></i>
            <input type="password" name="password" class="form-control" placeholder="Enter your Password" required value="<?php if (isset($_COOKIE['Passwordcookie'])) {
                echo $_COOKIE['Passwordcookie'];
            } ?>">
        </div>

        <!-- Remember me Functionality -->
        <div class="d-flex">
            <input type="checkbox" name="rememberme"> &nbsp;&nbsp;&nbsp; Remember Me
        </div>

        <!-- Login button -->
        <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>

        <!-- Already have an account? -->
        <p>Don't have account? <a href="index.php">Signup</a></p>
    </form>
</div>

    <!-- PHP Code -->
    <?php
        include 'connection.php';
        if (isset($_POST['submit'])) {
            $Email = $_POST['email'];
            $Password= $_POST['password'];

            // check the email exists are not in the database
            $Selectemail = "SELECT * FROM `signup_users` WHERE Email = '$Email' ";

            $selectionquery= mysqli_query($conn,$Selectemail);

            $Emails=mysqli_num_rows($selectionquery);
            if ($Emails) {
                // fetch full record of correspondence email
                $Fetch_full_result= mysqli_fetch_array($selectionquery);

                // take name of the user from database by using session
                $_SESSION['Name']=$Fetch_full_result['Name'];

                // now check the password are matching with the database are not
                $db_pass=$Fetch_full_result['Password'];

                // now compare passwords
                $verify_Passwords= password_verify($Password,$db_pass);
                if ($verify_Passwords) {
                    // set cookies , a cookie take minimum 3 arguments , cookie name , value and time
                    if (isset($_POST['rememberme'])) {
                        
                        // here set cookie
                        setcookie('Emailcookie',$Email,time()+86400);
                        
                        setcookie('Passwordcookie',$Password,time()+86400);

                    }else{

                    }

                    ?>
                    <script>
                        alert('login successful!');
                        location.replace('home.php');
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert('Wrong Password');
                    </script>
                    <?php
                }
                
            }else{
                ?>
                    <script>
                        alert('Invalid Email!');
                    </script>
                    <?php
            }
        }
    ?>
</body>
</html>