<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
</head>

<body>

    <?php

    // use controller;


    require("dbConnection.php");
    require("crud.php");
    require("controller.php");


    ?>




    <div class="jumbotron">
        <h1 class="display-4">My Details</h1>
        <p class="lead">The first section table connected to mysql database to retrieve the data. CRUD's create was used to create the table; read was used to display the table. Code can be found at: </p>
        <hr class="my-4">

        <?php


        // Attempt select query execution
        $sql = "SELECT * FROM persons";
        if ($result = mysqli_query($dbConnection, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo "<table class='table table-bordered table-striped'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>#</th>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Arrival Date in NZ</th>";
                echo "<th>Hobbies</th>";
                echo "<th>Tech Activities</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['first_name'] . "</td>";
                    echo "<td>" . $row['last_name'] . "</td>";
                    echo "<td>" . $row['arrival'] . "</td>";
                    echo "<td>" . $row['hobby'] . "</td>";
                    echo "<td>" . $row['tech'] . "</td>";

                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                // Free result set
                mysqli_free_result($result);
            } else {
                echo "<p class='lead'><em>No records were found.</em></p>";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . $dbConnection->error;
        }

        // Close connection
        // $dbConnection->close();
        ?>

    </div>









    <!-- calling backend api get -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Backend Api JSON data</h1>
            <p class="lead">Repository.php and Controller.php have been created to form the API. OOP style was used. This code has been uploaded to my github: </p>


            <?php
            $controller = new Controller($dbConnection);
            ?>

            <pre><?php
                    // call controller for json api

                    $controller->processRequest()


                    ?></pre>

        </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>

</html>