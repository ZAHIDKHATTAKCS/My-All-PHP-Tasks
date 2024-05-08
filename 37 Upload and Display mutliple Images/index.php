<!doctype html>
<html lang="en">
    <head>
        <title>Home</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh; background-color: lightblue;">

        <!-- enctype multipart form data attribute is used to encode your files and data to upload safely, you must have to 
            to use it when you handling the upload process
        -->

        <form  method="POST" enctype="multipart/form-data" style="background-color: blanchedalmond; padding: 40px; border-radius: 20px;">
            <h4>Apply for Web Developer Post</h4>
            <input type="text" name="name" class="mt-5 form-control  " placeholder="Enter your Name" required>
            <input type="text" name="qualification" class="mt-3 form-control  " placeholder="Enter your Qualification" required>
            <input type="email" name="email" class="mt-3 form-control  " placeholder="Enter your Email" required>
            <input type="text" name="language" class="mt-3 form-control  " placeholder="Enter your Language" required>
            <input type="file" name="file" class="mt-3 form-control  ">
            <button type="submit" name="submit" class="btn btn-primary w-100 mt-4">Submit</button>
            <a class="btn btn-primary mt-3 w-100" href="display.php">Check Form</a>
        </form>
        <?php 
            include 'connection.php';
            if (isset($_POST['submit'])) {
                $Name = $_POST['name'];
                $Qualification = $_POST['qualification'];
                $Email = $_POST['email'];
                $Language = $_POST['language'];
                // we have to use $_FILES as a global variable when we post file to database
                $File = $_FILES['file'];

                // print_r() function will provide full information about image like which type of an image what is it's location and what is the size of the image, and the most important attribute is tem_name which provide us the information about where the image is stored in temporary base for now we have to store it in other place, we have to print first one image to see the details like size , type, location and error , error is the option in image when image upload correctly means there is no error so the error code will be 0 if there is error so error=1 means there is an error in image code
                // print_r($File);

                $File_Name = $File['name'];
                $File_Path = $File['tmp_name'];
                $File_Error = $File['error'];

                if ($File_Error == 0) {

                    // here we have to store the temporary file in our folder so for that we have to store the name of the file in our folder
                    $File_Folder = 'upload/'.$File_Name;

                    // here we have function in php to move the file to a folder so we will here move the file from temp to our project folder
                    move_uploaded_file($File_Path, $File_Folder);

                    $Insert_Query = "INSERT INTO `registration`(`Name`, `Qualification`, `Email`, `Language`, `Pictures`) VALUES ('$Name','$Qualification','$Email','$Language','$File_Folder')";

                    $Query= mysqli_query($conn,$Insert_Query);

                    if ($Query) {
                        ?>
                        <script>
                            alert("data inserted");
                        </script>
                        <?php
                    }else{
                        ?>
                        <script>
                            alert("Insertion Query Error!");
                        </script>
                        <?php
                    }

                }



            }else{
                ?>
                <script>
                    alert('no button clicked yet');
                </script>
                <?php
            }
        ?>



        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
