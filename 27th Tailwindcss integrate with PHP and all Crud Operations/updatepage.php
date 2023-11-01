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
            </script>
            <?php
        }
        else{
            ?>
            
            <script>
                alert('Data not upadated check connection')
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
<body class="flex justify-center ">
    <div class="flex flex-col justify-center mt-32 border border-black w-[65 0px] bg-blue-200 p-10 rounded-lg shadow-lg shadow-black">
        <h1 class="text-center text-green-600">Now here you can update the data in this will also update in database</h1><br><br>
        <form action="" method="Post" class="">
            <div class="flex justify-between">
                <label for="name" class="mx-2">Name : </label>
                <input type="text" name="name" placeholder=" Enter your name" class="border border-black" value="<?php echo $arraydata ['Name']?>" required/>


                <label for="fname" class="mx-2"> Father Name : </label>
                <input type="text" name="fname" placeholder=" Enter your father name" class="border border-black" value="<?php echo $arraydata ['Father_Name']?>" required/>
            </div>

            <div class="flex justify-between">
                <label for="department" class="mx-2">Dept  : </label>
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

