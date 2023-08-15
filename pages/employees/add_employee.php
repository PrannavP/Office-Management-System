<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="../../style/add-employee.css">
</head>
<body>

    <div class="main-container">

        <h2>Onboard Employee</h2>

        <div class="cross">

            <a href="./employee.php">
                <img src="../../icons/maki_cross.png" alt="cross" width="35px">
            </a>

        </div>

        <form action="" method="post">

            <label for="employee_name">Name: </label><br>
            <input id="employee_name" type="text" name="employee_name"><br>

            <label for="employee_salary">Salary: </label><br>
            <input id="employee_salary" type="text" name="employee_salary"><br>

            <label for="employee_position">Position: </label><br>
            <input id="employee_position" type="text" name="employee_position"><br>

            <label for="employee_accountnumber">Account Number: </label><br>
            <input id="employee_accountnumber" type="text" name="employee_accountnumber"><br>

            <button name="submit" id="login">Onboard :D</button>

        </form>

    </div>

    <?php 
    
        require '../../connection.php';

        if(isset($_POST['submit'])){
            $e_name = $_POST['employee_name'];
            $e_salary = $_POST['employee_salary'];
            $e_position = $_POST['employee_position'];
            $e_accountnumber = $_POST['employee_accountnumber'];

            $query = "INSERT INTO employee(employee_name, employee_salary, employee_position, employee_accountnumber) VALUES ('$e_name', '$e_salary', '$e_position', '$e_accountnumber')";

            $query_run = mysqli_query($conn, $query);

            header("Location: ./employee.php");
        }

    ?>
    
</body>
</html>