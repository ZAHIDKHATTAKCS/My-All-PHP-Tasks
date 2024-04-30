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
<title>Signup</title>
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
        
        <!-- Name input -->
        <div class="input-group mt-3">
            <i class="input-group-text fas fa-user"></i>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
        </div>

        <!-- Email input -->
        <div class="input-group">
            <i class="input-group-text fas fa-envelope"></i>
            <input type="email" name="email" class="form-control" placeholder="Enter your Email address" required>
        </div>

        <!-- Password input -->
        <div class="input-group">
            <i class="input-group-text fas fa-lock"></i>
            <input type="password" name="password" class="form-control" placeholder="Create Password" required>
        </div>

        <!-- Confirm password input -->
        <div class="input-group">
            <i class="input-group-text fas fa-lock"></i>
            <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" required>
        </div>

        <!-- Create account button -->
        <button type="submit" name="submit" class="btn btn-primary w-100">Create Account</button>

        <!-- Already have an account? -->
        <p>Already have an account? <a href="login.php">Login</a></p>
    </form>
</div>

    <!-- PHP Code -->
    <?php
        include 'connection.php';
        if (isset($_POST['submit'])) {
            $Name = $_POST['name'];
            $Email = $_POST['email'];
            $Password = $_POST['password'];
            $Cpassword = $_POST['cpassword'];

            // Encryption of Passwords
            $EncryptPassword = password_hash($Password, PASSWORD_BCRYPT);
            $EncryptCpassword = password_hash($Cpassword, PASSWORD_BCRYPT);

            // check if email is already exists
            $Selection_query= "select * from signup_users where Email = '$Email'";

            $query=mysqli_query($conn,$Selection_query);

            $emailcounts= mysqli_num_rows($query);
            if ($emailcounts>0) {
                ?>
                <script>
                    alert('Email Already Exists');
                </script>
                <?php
            }else{
                if ($Password === $Cpassword) {
                    $insertionquery="INSERT INTO `signup_users`(`Name`, `Email`, `Password`, `Confirm_Password`) VALUES ('$Name','$Email','$EncryptPassword','$EncryptCpassword')";

                    $insertion=mysqli_query($conn,$insertionquery);

                    if ($insertion) {
                        ?>
                        <script>
                            alert('You Are registered yourselef! congratulations!');
                            location.replace('login.php');
                            alert('login yourself now!')
                        </script>
                        <?php
                    }else{
                        ?>
                        <script>
                            alert('Error in insertion query');
                        </script>
                        <?php
                    }

                }else{
                    ?>
                        <script>
                            alert('Your passwords are not matching !');
                        </script>
                        <?php
                }
            }
            
        }
    ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>