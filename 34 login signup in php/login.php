<?php
    session_start();
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
<title>Login Page</title>
<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh;
    }
    form{
        border: 1px solid red;
        border-radius: 20px;
        background-color: #f2f2f2;
        padding: 30px;
        height: auto;
        width: 400px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    a{
        text-decoration: none;
    }
</style>
</head>
<body>
    <marquee behavior="alternate" class="bg-warning mb-3" style="color:blue; border: 2px solid black; font-size: 20px; font-weight: bold;">Just Logged In Now</marquee>

    <form action="" method="post">
        <h3>Create Account</h3>
        <p>Get Started with free account</p>
        <div class="d-flex flex-column gap-2">
            <button type="submit" class="btn btn-warning">
                <i class="fab fa-google"></i>
                Continue with Google
            </button>
            
            <button type="submit" class="btn btn-primary">
                <i class="fab fa-facebook"></i>
                Continue with Facebook
            </button>
        </div>

        <p style="color: gray;">--------------OR--------------</p>

        
        <!-- Email -->
        <div class="input-group mt-3">
            <i class="fas fa-envelope input-group-text"></i>
            <input name="email" type="email" class="form-control" placeholder="Email ID" required>
        </div>

        <!-- Password -->
        <div class="input-group mt-3">
            <i class="fas fa-lock input-group-text"></i>
            <input name="password" type="password" class="form-control" placeholder="Enter Password" required>
        </div>

        <button type="submit" name="submit" class="mt-3 btn  btn-primary w-100">Log In</button>

        <p class="mt-2">Have no account? <a href="index.php">Sign up here</a></p>
    </form>

    <!-- PHP Code -->
    <?php
        include ('connection.php');
        if(isset($_POST['submit'])){
            $Email = $_POST['email'];
            $Password = $_POST['password'];
            
            // select email from database
            $Email_Search = "SELECT * FROM `signup_users` WHERE Email = '$Email'";

            $Run_Query=mysqli_query($conn,$Email_Search);

            $Email_Count=mysqli_num_rows($Run_Query);

            if($Email_Count){
                
                // here first fetch full record mean row of an Email
                $Fetch_Full_Record = mysqli_fetch_array($Run_Query);

                // here take out only the Password from the Database
                $DB_Pass=$Fetch_Full_Record['Password'];

                // using session to show the value anywhere
                $_SESSION['username']=$Fetch_Full_Record['Name'];

                // now checking the passwords are matching are not mean the Password that user enter in login form and the database one are matching or not, here password verify fnt is used for verify that passwords are matching are not
                $Password_Verifying = password_verify($Password, $DB_Pass);

                if($Password_Verifying){
                    ?>
                        <script>
                            alert('login Successful');
                            location.replace('home.php');
                        </script>
                    <?php
                }else{
                    
                    ?>
                        <script>
                            alert('You Enter Wrong Password');
                        </script>
                    <?php
                }
            }else{
                ?>
                <script>
                    alert('Invalid Email! Sing up first');
                    location.replace('index.php');
                </script>
            <?php
            }
        }
    ?>

</body>
</html>