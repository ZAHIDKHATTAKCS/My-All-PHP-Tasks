<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice of all</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex justify-center ">
    <div class="flex flex-col justify-center mt-32 border border-black w-[65 0px] bg-blue-200 p-10 rounded-lg shadow-lg shadow-blue-500">
        <h1 class="text-center text-2xl text-green-600">Fill the form correctly</h1><br><br>
        <form action="" method="Post" class="">
            <div class="flex justify-between">
                <label for="name" class="mx-2">Name : </label>
                <input type="text" name="name" placeholder=" Enter your name" class="border border-black" required/>


                <label for="fname" class="mx-2"> Father Name : </label>
                <input type="text" name="fname" placeholder=" Enter your father name" class="border border-black" required/>
            </div><br>

            <div class="flex justify-between">
                <label for="department" class="mx-2">Dept  : </label>
                <input type="text" name="department" placeholder=" Enter your Department" class="border border-black" required/>


                <label for="rolno" class="mx-2"> Roll Number : </label>
                <input type="text" name="rolno" placeholder=" Enter your Roll Number" class="border border-black" required/>
            </div>


            <div class="flex justify-center mt-10">
                <button class="text-center text-white bg-blue-500 p-1 rounded-md hover:bg-blue-600" name="submit">Submit</button>
            </div>
            <div class="flex justify-center mt-10">
                <a href="showdata.php" class="text-center text-white bg-green-500 p-1 rounded-md hover:bg-green-600">Check Form</a>
            </div>
        </form>
    </div>
</body>
</html>

<?php 

    include 'connection.php';

    if(isset($_POST['submit'])){

        $Name = $_POST['name'];
        $fname = $_POST['fname'];
        $department = $_POST['department'];
        $rolno = $_POST['rolno'];



        $insertquery="INSERT INTO `data`(`id`, `Name`, `Father_Name`, `Department`, `Roll_Number`) VALUES ('','$Name','$fname','$department','$rolno')";

        $result=mysqli_query($conn,$insertquery);

        if($result){
            ?>
            <script>
                alert('Data inserted to the Database');
            </script>
            <?php
        }
        else{
            ?>
            
            <script>
                alert('Database not inserted');
            </script>
            <?php
        }
    }

?>