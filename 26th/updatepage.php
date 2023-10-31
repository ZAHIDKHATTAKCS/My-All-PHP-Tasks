<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form action="" method="POST">


                <?php 
                include 'connection.php';

                $getid=$_GET['id'];

                $showquery = "select * from employes where id = $getid";

                $showdata= mysqli_query($conn,$showquery);

                $arrdata=mysqli_fetch_array($showdata);


            if(isset($_POST['submit'])){
                $idupdate= $_GET['id'];
                $name=$_POST['name'];
                $address=$_POST['address'];

                $updatequery="UPDATE `employes` SET `id`='$idupdate',`Name`='$name',`Address`='$address' WHERE id = $idupdate";

                $result=mysqli_query($conn,$updatequery);

                if($result){
                    ?>
                    <script>
                        alert('Data Updated Properly')
                    </script>
                    <?php
                }
                else{
                    ?>
                    <script>
                        alert('Data not updated Properly check connections');
                    </script>
                    <?php
                }
            }

            ?>


        Name : <input type="text" name="name" placeholder="Enter your Name" value="<?php echo $arrdata['Name']; ?>" />
        Address : <input type="text" name="address" value="<?php echo $arrdata['Address']; ?>" placeholder="Enter your Address" />

        <button type="submit" name="submit" >Update</button>

        <a href="inserteddata.php">Check Inserted data</a>
    </form>
</body>
</html>
