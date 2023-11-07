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
        <p class="text-center text-2xl text-white mt-5">Fill the form</p>
        <form method="post" class="p-10">
            <div class="row flex justify-center items-center">
                <label for="name">Name : &nbsp; </label>
                <input type="text" name="name" placeholder=" Enter your name" class="border border-black rounded-sm" required />
                <label for="fname" class="ml-4">F Name : &nbsp; </label>
                <input type="text" name="fname" placeholder=" Enter your Father name" class="border border-black rounded-sm" required />
            </div><br><br>
            <div class="row flex justify-center items-center">
                <label for="rolno">Roll-Number : &nbsp; </label>
                <input type="text" name="rolno" placeholder=" Enter your Roll Number" class="border border-black rounded-sm" required />
                <label for="section" class="ml-4">Section : &nbsp; </label>
                <input type="text" name="section" placeholder=" Enter your section" class="border border-black rounded-sm" required />
            </div><br><br>
            <button type="submit" name="submit" class="bg-blue-500 border border-black rounded-md p-2 hover:bg-blue-400">Submit</button>
            <a href="show.php" class="border border-black rounded-md p-2 bg-slate-200 hover:bg-slate-300 float-right">Check Data</a>
        </form>
    </div>

    <?php 
    
    include 'connection.php';

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $fname=$_POST['fname'];
        $rolno=$_POST['rolno'];
        $section=$_POST['section'];

        $insertquery="INSERT INTO `insertion`(`id`, `Name`, `Father_Name`, `Roll_Number`, `Section`) VALUES ('','$name','$fname','$rolno','$section')";

        $result=mysqli_query($conn,$insertquery);

        if($result){
            ?>
            <script>
                alert 'data inserted';
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert 'data not inserted';
            </script>
            <?php
        }
    }
    ?>
</body>
</html>