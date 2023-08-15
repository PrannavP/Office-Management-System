<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Client</title>
    <link rel="stylesheet" href="../../style/add-client.css">
</head>
<body>

    <div class="main-container">

        <h2>Onboard Client</h2>

        <div class="cross">

            <a href="./employee.php">
                <img src="../../icons/maki_cross.png" alt="cross" width="35px">
            </a>

        </div>

        <form action="" method="post">

            <label for="client_name">Name: </label><br>
            <input id="client_name" type="text" name="client_name"><br>

            <label for="client_system">System: </label><br>
            <input id="client-system" type="text" name="client_system"><br>


            <button name="submit">Onboard :D</button>

        </form>

        <?php
        
            require '../../connection.php';

            if(isset($_POST['submit'])){
                $c_name = $_POST['client_name'];
                $c_system = $_POST['client_system'];

                $query = "INSERT INTO client(client_name, client_system) VALUES ('$c_name', '$c_system')";

                $query_run = mysqli_query($conn, $query);

                header("Location: ./client.php");
            }
        
        ?>

    </div>