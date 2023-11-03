<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice of all</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex justify-center flex-col items-center sm:bg-white md:flex md:justify-center md:flex-col md:bg-white">
    <div class="flex flex-col md:flex md:flex-col justify-center md:justify-center md:mt-32 mt-32 sm:mt-5 sm:block border border-black md:w-[600px] bg-blue-200 p-10 md:p-5 rounded-lg shadow-lg shadow-blue-500 sm:w-[300px]">
        <h1 class="text-center md:text-2xl text-green-600 sm:text-lg">Fill the form correctly</h1><br><br>
        <form action="" method="Post" class="sm:block">
            <div class="flex justify-between sm:block md:flex md:justify-between md:items-center">
                <label for="name" class="sm:mx-0">Name : </label>
                <input type="text" name="name" placeholder=" Enter your name" class="border border-black" required/>


                <label for="fname" class="sm:mx-0 sm:mt-2 md:mt-0"> Father Name : </label>
                <input type="text" name="fname" placeholder=" Enter your father name" class="border border-black" required/>
            </div><br>

            <div class="flex justify-between sm:block sm:space-y-2 md:space-y-0 md:flex md:justify-between md:items-center">

                <label for="department" class="md:mx-0 sm:mx-0">Dept  : </label>
                <input type="text" name="department" placeholder=" Enter your Department" class="border border-black" required/>


                <label for="rolno" class="mx-2 sm:mx-2 sm:mt-2"> Roll Number : </label>
                <input type="text" name="rolno" placeholder=" Enter your Roll Number" class="border border-black" required/>
            </div>


            <div class="flex justify-center mt-10">
                <button class="text-center text-white bg-blue-500 p-1 rounded-md hover:bg-blue-600" name="submit">Submit</button>
            </div>
            <div class="flex justify-center mt-10">
                <a href="showdata.php" class="text-center text-white bg-green-500 p-1 rounded-md hover:bg-green-600">Check Form</a>
            </div>
        </form>
    </div><br><br><br><br><br><br>

        <marquee behavior="alternate" direction="left" scrollamount="10px" class="sm:hidden md:flex">
            <h1 class="text-2xl md:text-blue-600 md:p-2 md:border-2 md:rounded-lg md:border-green-600 md:bg-slate-300">This form is created by Zahid Khattak using Tailwindcss as a frontend and PHP as a Backend</h1>
        </marquee><br><br>

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