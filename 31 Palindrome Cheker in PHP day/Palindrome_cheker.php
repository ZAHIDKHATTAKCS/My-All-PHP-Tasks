<?php

?>
<!doctype html>
<html lang="en">

<head>
    <title>Palindrom cheker</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container">
        <form action="" method="POST">
            <h3>Palindrome Checker</h3>
            <h4>
                <?php
                    if(isset($_POST['submit'])){
                        $word = $_POST['palindrome'];

                        $reveword = strrev($word);
                        
                        if($word == $reveword){
                            echo "Yes it is Palindrome";
                        }else{
                            echo "Not $word in not a Palindrome";
                        }
                    }
                ?>
            </h4>
            <fieldset>
                <textarea name="palindrome" placeholder=" Type your word ...." required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit">Submit</button>
            </fieldset>
            <p class="copyright">Designed by <a href="" target="_blank" title="Colorlib ">Zahid Khattak </a></p>
        </form>
    </div>



    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>