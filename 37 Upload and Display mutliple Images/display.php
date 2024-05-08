<!doctype html>
<html lang="en">
    <head>
        <title>Display Database Data</title>
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

    <body>

        <div class="container">
            <table class="table table-bordered  table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Qulification</th>
                        <th>Email</th>
                        <th>Language</th>
                        <th>Pic</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                            include 'connection.php';

                            $SelectionQuery= "select * from registration";

                            $query = mysqli_query($conn, $SelectionQuery);

                            while ($result = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td> <?php echo $result['Id']; ?></td>
                                        <td> <?php echo $result['Name']; ?></td>
                                        <td> <?php echo $result['Qualification']; ?></td>
                                        <td> <?php echo $result['Email']; ?></td>
                                        <td> <?php echo $result['Language']; ?></td>
                                        <td> <img src="<?php echo $result['Pictures']; ?>" alt="img" style="width:150px;"></td>
                                    </tr>
                                <?php
                            }

                        ?>
                </tbody>
            </table>
        </div>

        <!-- Bootstrap JavaScript Libraries -->
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
