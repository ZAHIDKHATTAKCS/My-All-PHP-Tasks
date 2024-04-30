<?php
Session_start();
session_destroy();

if(!$_SESSION['Name']){
    ?>
    <script>
        alert("You are logged out please login first");
        location.replace('login.php');
    </script>
    <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Home</title>
<style>
    body{
        background-image: url('https://images.pexels.com/photos/534164/pexels-photo-534164.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
        background-size: cover;
        background-repeat: no-repeat;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    a{
        text-decoration: none;
        color: white;
    }
</style>
</head>
<body>

    <div class="container">
        <h2>Hi <?php echo $_SESSION['Name']; ?> Welcome to home page your are logged in now</h2>
        <button type="submit" class="btn btn-danger">
            <a href="logout.php">Log out</a>
        </button>
    </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>