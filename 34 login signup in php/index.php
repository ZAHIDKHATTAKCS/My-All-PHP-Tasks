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
<title>Home</title>
<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
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

        <!-- Name -->
        <div class="input-group mt-3">
            <i class="fas fa-user input-group-text"></i>
            <input name="name" type="text" class="form-control" placeholder="Enter your name here" required>
        </div>

        
        <!-- Email -->
        <div class="input-group mt-3">
            <i class="fas fa-envelope input-group-text"></i>
            <input name="email" type="email" class="form-control" placeholder="Email Address" required>
        </div>
        
        <!-- Phone -->
        <div class="input-group mt-3">
            <i class="fas fa-phone-alt input-group-text"></i>
            <input name="phone" type="phone" class="form-control" placeholder="Phone Number" required>
        </div>

        <!-- Password -->
        <div class="input-group mt-3">
            <i class="fas fa-lock input-group-text"></i>
            <input name="password" type="password" class="form-control" placeholder="Create Password" required>
        </div>

        <!-- Confirm Password -->
        <div class="input-group mt-3">
            <i class="fas fa-lock input-group-text"></i>
            <input name="confirmpassword" type="password" class="form-control" placeholder="Repeat Password" required>
        </div>

        <button type="submit" name="submit" class="mt-3 btn  btn-primary w-100">Create Account</button>

        <p class="mt-2">Have no account ? <a href="login.php">Log In</a></p>
    </form>

    <!-- PHP Code -->
    <?php
        include('connection.php');
        if(isset($_POST['submit'])){
            $Name= $_POST['name'];
            $Email= $_POST['email'];
            $Phone= $_POST['phone'];
            $Password= $_POST['password'];
            $Confirm_Password= $_POST['confirmpassword'];

            // encryption of passwords
            $Encrypted_Password= password_hash($Password,PASSWORD_BCRYPT);
            $Encrypted_Confirm_Password= password_hash($Confirm_Password,PASSWORD_BCRYPT);

            // check email if exists 
            $Selection_Query="select * from signup_users where Email = '$Email'";
            $Selected_Emails=mysqli_query($conn,$Selection_Query);

            $Email_Counts=mysqli_num_rows($Selected_Emails);
            if($Email_Counts > 0){
                ?>
                    <script>
                        alert('The Entered Email Already Exists Try another');
                    </script>
                <?php
            }else{
                if($Password === $Confirm_Password){
                    $Insertion_Query="INSERT INTO `signup_users`(`Name`, `Email`, `Phone_Number`, `Password`, `Repeat_Password`) VALUES ('$Name','$Email','$Phone','$Encrypted_Password','$Encrypted_Confirm_Password')";

                    $Insert_Data=mysqli_query($conn,$Insertion_Query);

                    if ($Insert_Data) {
                        ?>
                        <script>
                            alert('Congratulations! you are signed up successfully!');
                            location.replace('login.php');
                        </script>
                        <?php
                    }else{
                        ?>
                        <script>
                            alert('Error in insertion');
                        </script>
                        <?php
                    }
                }else{
                    ?>
                        <script>
                            alert('You Passwords are not matching try once again');
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