<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style/login.css">
</head>
<body>

    <?php

        // starting session
        session_start();

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "erp";

        $conn = mysqli_connect($hostname, $username, $password, $database);

        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        };

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = $_POST["email"];
            $password = $_POST['password'];

            $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($conn, $sql);
            
            if($result && mysqli_num_rows($result) > 0){
                // store the email in session
                $_SESSION["email"] = $email;
            
                // redirect to the dashboard
                header("Location: ./dashboard.php");
            } else{
                echo "<p class='error-message'>Login failed. Please check your email and password.</p>";
                // echo "<script> alert(`Wrong email or password!`); </script>";
            };
        }
        
        mysqli_close($conn);

    ?>

    <div class="form">

        <form action="" method="post">

            <label for="email" class="emailLabel">Email:</label><br>
            <input type="email" id="email" placeholder="Email" name="email"><br>

            <label for="password" class="passwordLabel">Password: </label><br>
            <input type="password" id="password" placeholder="Password" name="password"><br>

            <button id="login">Login</button>

        </form>

    </div>
    
</body>
</html>