<?php

// this is the code for connection of php and you have to include in your all those code in which you want connection to database



$username = "root";
$password = "";
$servername = "localhost";
$dbname = "crud_operations";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if ($connection) {

?>
    <!-- php end here for adding javascript so we have to close it here -->

    <script>
        alert("Connection Successful");
    </script>

    <!-- and again start php from here  -->
<?php
} else {
    die("No connection" . mysqli_connect_error());
}


?>