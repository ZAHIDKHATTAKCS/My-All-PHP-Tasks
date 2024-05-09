<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form action="" method="post" enctype="multipart/form-data" class="border border-danger p-5 bg-light shadow-lg rounded-4">
        <h4 class="text-capitalize text-danger">Apply for web developer post</h4>
        <input type="text" name="name" placeholder="Enter your Name" class="form-control mt-4" required>
        <input type="text" name="qualification" placeholder="Enter your Qualification" class="form-control mt-4" required>
        <input type="email" name="email" placeholder="Enter your Email" class="form-control mt-4" required>
        <input type="text" name="language" placeholder="Enter your Language" class="form-control mt-4" required>
        <input type="file" name="file" class="form-control mt-4" required>
        <button type="submit" class="btn btn-primary mt-4" name="submit">Submit</button>
        <a href="display.php" class="btn btn-primary mt-4">Check Database Data</a>
    </form>

    <!-- PHP Code -->

    <?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $Name = $_POST['name'];
        $Qualification = $_POST['qualification'];
        $Email = $_POST['email'];
        $Language = $_POST['language'];
        $File = $_FILES['file'];

        // print_r($File);

        $File_Name = $File['name'];
        $File_Path = $File['tmp_name'];
        $File_Error = $File['error'];

        // echo $File_Name;

        //  let say our image name is tower pc.png now we have to break these name in one side and extension in another side, we 
        // have a function in php that is explode which convert string to an array
        // and we have another function of end($filename) which only return the last value of the array in our case this will only
        // return png and we have another function strtolower which changes all the uppercase to lowercase
        // after that we have to create an array of different format of images like arrary ('png','jpg','jpeg');

        // in array(); is a method which take two arguments 1 is the array and other is a variable or file like if we pass our first array
        // that contains png,jpg,jpeg and pass svg as a 2nd argument in it so this will return only svg from that array


        // let's start first we have to find the file extension that user enters
        $File_Ext = explode('.', $File_Name); // explode function breaks the name and we just tell that all before the . is another string and after the dot is another string in $File_Name

        // we can't echo an array this why we have a function of printr to print an array so we can see here the explode fnt divide our array
        //print_r($File_Ext); // the print r function will print array of $File_Ext like this will return that in the 0 index we have 'tower pc' which will be the name of that image before '.' and in 1 index that will show we have png or jpg etc


        // now all we need is the last name of that array so , for that we have end() function which only return the end of the array, and we have to change it to lowercase as we know the extension of the file will be in the lower case always so we have to change it to lowercase

        $File_Ext_Last = strtolower(end($File_Ext));

        //echo 'Your File Extension is '.'<mark class="p-1 border border-black ml-2">'.$File_Ext_Last.'</mark>';

        // echo $File_Ext_Last; this will show us which the extension with change it to lowercase

        // now we have to create own array to check that which type of extension will we accept

        $Valid_File_Ext = array('png', 'jpg', 'jpeg');


        if ($File_Error == 0) {
            // now here we will check if the file extension is exists in our array so run the below code else run else code
            if (in_array($File_Ext_Last, $Valid_File_Ext)) {

                    $File_Folder = 'upload/' . $File_Name;

                    move_uploaded_file($File_Path, $File_Folder);

                    $insertquery = "INSERT INTO `registration`(`Name`, `Qualification`, `Email`, `Language`, `Pictures`) VALUES ('$Name','$Qualification','$Email','$Language','$File_Folder')";

                    $query = mysqli_query($conn, $insertquery);

                if ($query) {
                ?>
                    <script>
                        alert('Data Inserted to the Database!');
                    </script>
                <?php
                } else {
                ?>
                    <script>
                        alert('Data Insertion Failed!');
                    </script>
                <?php
                }
            } else {
                ?>
                <script>
                    alert('we only accept extension of SVG JPEG JPG');
                </script>
    <?php
            }
        }else{
            ?>
            <script>
                alert('error in file');
            </script>
            <?php
        }
    }
    ?>




    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>