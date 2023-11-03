<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-slate-300 flex justify-center items-center mt-10">
    <div class="shadow-2xl shadow-blue-800 border border-black rounded-lg bg-white p-2 w-[450px] md:w-[700px]">
        <br>
        <h1 class="text-center text-blue-500 md:text-2xl">Here is the data that is send to the database</h1>
        <div class="sm:mt-5 sm:flex sm:justify-center mb-5">
            <table class="border-collapse border w-[320px] md:w-full md:mt-5">
                <thead>
                    <tr>
                        <th class="md:p-1 border border-black">Id</th>
                        <th class="md:p-1 border border-black">Name</th>
                        <th class="md:p-1 border border-black">Father Name</th>
                        <th class="md:p-1 border border-black">Department</th>
                        <th class="md:p-1 border border-black">Roll Number</th>
                        <th class="md:p-1 border border-black" colspan="2">Operations</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                        include 'connection.php';

                        $selectquery="select * from data";

                        $connectionquery=mysqli_query($conn,$selectquery);

                        // $number = mysqli_num_rows($connectionquery);

                        // echo "the number of rows in database is =".$number;

                        while($fetch=mysqli_fetch_array($connectionquery)){
                            ?>
                            <tr>
                        <td class="md:p-1 border border-black"><?php echo $fetch['id']; ?></td>
                        <td class="md:p-1 border border-black"><?php echo $fetch['Name']; ?></td>
                        <td class="md:p-1 border border-black"><?php echo $fetch['Father_Name']; ?></td>
                        <td class="md:p-1 border border-black"><?php echo $fetch['Department']; ?></td>
                        <td class="md:p-1 border border-black"><?php echo $fetch['Roll_Number']; ?></td>

                        <!-- update icon and operation -->
                        <td class="md:p-1 border border-black hover:cursor-pointer"><a href="updatepage.php?id=<?php echo $fetch['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" fill="green" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg></a>
                        </td>

                        <!-- delete icon and operation -->
                        <td class="md:p-1 border border-black hover:cursor-pointer"><a href="deletepage.php?id=<?php echo $fetch['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                            </a>
                        </td>
                    </tr>
                            <?php
                        }
                    ?>
                    
                </tbody>
            </table><br><br>
        </div>
    </div>
</body>
</html>

