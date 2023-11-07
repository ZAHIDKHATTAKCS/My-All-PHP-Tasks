<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <link rel="stylesheet" href="output.css">
</head>
<body class="flex justify-center bg-yellow-100">
    <div class="mt-10 border border-blue-600 rounded-md p-2 bg-gray-200 shadow-md shadow-gray-500">
        <p class="text-center text-2xl text-green-700">Here is the database for the data</p>
        <table class="border-collapse mt-4">
            <thead>
                <tr>
                    <th class="border border-black p-2">id</>
                    <th class="border border-black p-2">Name</>
                    <th class="border border-black p-2">Father Name</>
                    <th class="border border-black p-2">Roll-Number</>
                    <th class="border border-black p-2">Section</>
                    <th class="border border-black p-2" colspan="2">Operations</>
                </tr>
            </thead>
            <tbody>
                
                    <?php 

                        include 'connection.php';
                        $selectquery="select * from insertion";

                        $connect=mysqli_query($conn,$selectquery);

                        while($fetch=mysqli_fetch_array($connect)){
                            ?>
                            <tr>
                                <td class="border border-black p-2"><?php echo $fetch['id'];?></td>
                                <td class="border border-black p-2"><?php echo $fetch['Name'];?></td>
                                <td class="border border-black p-2"><?php echo $fetch['Father_Name'];?></td>
                                <td class="border border-black p-2"><?php echo $fetch['Roll_Number'];?></td>
                                <td class="border border-black p-2"><?php echo $fetch['Section'];?></td>
                                <!-- edit is here -->
<td class="border border-black p-2 text-red-500 hover:cursor-pointer text-lg"><a href="update.php?id=<?php echo $fetch['id'];?>">Edit</a></td>
<td class="border border-black p-2 text-green-500 hover:cursor-pointer text-lg"><a href="delete.php?id=<?php echo $fetch['id'];?>">Delete</a></td>
                            </tr>
                            <?php
                        }

                    ?>
                    
                
            </tbody>
        </table>
        <div class="flex justify-center mt-5">

            <a href="index.php" class="bg-green-800 hover:bg-green-500 hover:shadow-md hover:shadow-yellow-400 text-lg text-white border border-black p-2  rounded-md">Insert more data</a><br><br>
        </div>
        <div class="flex justify-center mt-5">
            <a href="truncate.php" class="bg-green-800 hover:bg-green-500 hover:shadow-md hover:shadow-yellow-400 text-lg text-white border border-black p-2  rounded-md">Truncate Table</a><br><br>
        </div>
    </div>
</body>
</html>

