<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP full crud operations</title>
    <link rel="stylesheet" href="output.css">
</head>
<body class="flex justify-center">
    <div class="main-div mt-32 border border-red-500 bg-green-400">
        <p class="text-center text-2xl text-white mt-5">Fill the data correctly this will update to database</p>
        <form method="post" class="p-10">


    <?php
        include 'connection.php';
        $getid = $_GET['id'];
        $selectquery = "select * from insertion where id = $getid";

        $cone = mysqli_query($conn, $selectquery);

        while ($fetching = mysqli_fetch_array($cone)) {
            ?>
                <div class="row flex justify-center items-center">
                    <label for="name">Name : &nbsp; </label>
                    <input type="text" name="name" value="<?php echo $fetching['Name']; ?>" class="border border-black rounded-sm" required />
                    <label for="fname" class="ml-4">F Name : &nbsp; </label>
                    <input type="text" name="fname" value="<?php echo $fetching['Father_Name']; ?>" class="border border-black rounded-sm" required />
                </div><br><br>
                <div class="row flex justify-center items-center">
                    <label for="rolno">Roll-Number : &nbsp; </label>
                    <input type="text" name="rolno" value="<?php echo $fetching['Roll_Number']; ?>" class="border border-black rounded-sm" required />
                    <label for="section" class="ml-4">Section : &nbsp; </label>
                    <input type="text" name="section" value="<?php echo $fetching['Section']; ?>" class="border border-black rounded-sm" required />
                </div><br><br>
            <?php
            }
    ?>
            <div class="flex justify-center">

                <button type="submit" name="submit" class="bg-blue-500 border border-black rounded-md p-2 hover:bg-blue-400 text-lg">Update</button>
            </div>
        </form>
    </div>

    <?php

include 'connection.php';


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $rolno = $_POST['rolno'];
    $section = $_POST['section'];
    
    $getid4update=$_GET['id'];
    
    $updatequery="UPDATE `insertion` SET `id`='$getid4update',`Name`='$name',`Father_Name`='$fname',`Roll_Number`='$rolno',`Section`='$section' WHERE id=$getid4update";

    $result = mysqli_query($conn, $updatequery);
    header('location:show.php');
}
?>
</body>
</html>