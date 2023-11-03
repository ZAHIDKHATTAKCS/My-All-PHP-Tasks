<?php 

    include 'connection.php';

    $getid= $_GET['id'];

    $selectionquery="select * from data where id = $getid";

    $shwodata=mysqli_query($conn,$selectionquery);

    $arraydata= mysqli_fetch_array($shwodata);

    if(isset($_POST['update'])){

        $Name = $_POST['name'];
        $fname = $_POST['fname'];
        $department = $_POST['department'];
        $rolno = $_POST['rolno'];

        $updatequery="UPDATE `data` SET `id`='$getid',`Name`='$Name',`Father_Name`='$fname',`Department`='$department',`Roll_Number`='$rolno' WHERE id = $getid";

        $final=mysqli_query($conn,$updatequery);

        if($final){
            ?>
            <script>
                alert('Data updated succefully in database');
                window.location.href = 'showdata.php'; //this command will redirect to the update page when data updated header:location(); will be run first if we used header location command then the alert can't be run first and directly be redirect to the show page this why i used window.location.href here this will show first alert and after that it will redirect to the page
            </script>
            <?php
        }
        else{
            ?>
            
            <script>
                alert('Data not upadated check connection');
            </script>
            <?php
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice of all</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex justify-center">
    <div class="flex flex-col md:flex md:flex-col justify-center md:justify-center md:mt-30 mt-20 sm:block border border-black md:w-[600px] bg-blue-200 p-10 md:p-5 rounded-lg shadow-lg shadow-blue-500 sm:w-[300px]">
        <h1 class="text-center md:text-2xl text-green-600">Now here you can update the data in this will also update in database</h1><br><br>
        <form action="" method="Post" class="">
            <div class="block md:flex md:justify-between">
                <label for="name" class="md:mx-2">Name : </label>
                <input type="text" name="name" placeholder=" Enter your name" class="border border-black" value="<?php echo $arraydata ['Name']?>" required/>


                <label for="fname" class="md:mx-2"> Father Name : </label>
                <input type="text" name="fname" placeholder=" Enter your father name" class="border border-black" value="<?php echo $arraydata ['Father_Name']?>" required/>
            </div>

            <div class="block md:flex md:justify-between sm:mt-4 md:mt-10">
                <label for="department" class="md:mx-2">Dept  : </label>
                <input type="text" name="department" placeholder=" Enter your Department" class="border border-black" value="<?php echo $arraydata ['Department']?>" required/>


                <label for="rolno" class="mx-2"> Roll Number : </label>
                <input type="text" name="rolno" placeholder=" Enter your Roll Number" class="border border-black" value="<?php echo $arraydata ['Roll_Number']?>" required/>
            </div>


            <div class="flex justify-center mt-10">
                <button class="text-center text-white bg-blue-500 p-1 rounded-md hover:bg-blue-600" name="update">Update</button>
            </div>
            <div class="flex justify-center mt-10">
                <a href="showdata.php" class="text-center text-white bg-green-500 p-1 rounded-md hover:bg-green-600">Check Form</a>
            </div>
        </form>
    </div>
</body>
</html>

