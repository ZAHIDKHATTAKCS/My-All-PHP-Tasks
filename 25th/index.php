<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update in PHP</title>
    <?php include('connection.php');?>
</head>
<body>
    <form action="" method="POST">


                <?php 

            if(isset($_POST['submit'])){
                $name=$_POST['name'];
                $address=$_POST['address'];

                $insertquery="INSERT INTO `employes`(`id`, `Name`, `Address`) VALUES ('','$name','$address')";

                $result=mysqli_query($conn,$insertquery);

                if($result){
                    ?>
                    <script>
                        alert('Data inserted')
                    </script>
                    <?php
                }
                else{
                    ?>
                    <script>
                        alert('Data not inserted');
                    </script>
                    <?php
                }
            }

            ?>


        Name : <input type="text" name="name" placeholder="Enter your Name" />
        Address : <input type="text" name="address" placeholder="Enter your Address" />

        <button type="submit" name="submit">Submit</button>

        <a href="inserteddata.php">Check Inserted data</a>
    </form>
</body>
</html>
