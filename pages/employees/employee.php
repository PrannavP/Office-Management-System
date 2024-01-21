<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link rel="stylesheet" href="../../style/employee.css">
</head>
<body>

    <div class="header">

        <h1>Employees</h1>

        <p id="time"></p>

    </div>

    <nav class="side-nav">

        <div class="employee-tab side-tab">

            <a href="./employee.php">
                <img src="../../icons/ion_people.png" alt="employees-image" width="55px"><br>
                <p class="employee-text">Employees</p>
            </a>
            

        </div>

        <div class="payroll-tab side-tab">

            <a href="../payrolls/payroll.php">
                <img src="../../icons/fluent-mdl2_money.png" alt="payroll-image" width="55px"><br>
                <p class="payroll-text">Payroll</p>
            </a>

        </div>

        <div class="meetings-tab side-tab">

            <a href="../clients/client.php">
                <img src="../../icons/mdi_virtual-meeting.png" alt="meeting-image" width="55px"><br>
                <p class="meeting-text">Clients</p>
            </a>

        </div>

        <div class="tickets-tab side-tab">

            <a href="../tickets/ticket.php">
                <img src="../../icons/ep_ticket.png" alt="ticket-image" width="55px"><br>
                <p class="ticket-text">Ticket</p>
            </a>

        </div>

        <div class="settings side-tab">

            <a href="../settings/settings.php">
                <img src="../../icons/material-symbols_settings.png" alt="setting-image" width="55px"><br>
                <p class="setting-text">Settings</p>
            </a>

        </div>

    </nav>

    <div class="main-container">

        <div class="back">

            <a href="../../dashboard.php">
                <img src="../../icons/mdi_arrow-left.png" alt="back" width="40px">
            </a>

        </div>

        <div class="add">

            <a href="./add_employee.php" id="add-employee">
                <img src="../../icons/material-symbols_add.png" alt="add" width="40px">
            </a>

        </div>

        <div class="employees-list-table">

            <table border="1" cellpadding=1 cellspacing=1>

                <tr class="header-row">

                    <th style="width: 270px;">Name</th>
                    <th style="width: 200px;">Salary</th>
                    <th style="width: 280px;">Position</th>
                    <th>Bank Account Number</th>
                    <th>Date Joined</th>

                </tr>

                <?php 
                
                    // importing connection
                    require '../../connection.php';

                    // query
                    $query = "SELECT * FROM employee";

                    // Execute the sql query
                    $records = mysqli_query($conn, $query);

                    while($rows = mysqli_fetch_assoc($records)){

                ?>

                <tr>

                    <td><p><?php echo $rows['employee_name']?></p></td>
                    <td><?php echo $rows['employee_salary']?></td>
                    <td><?php echo $rows['employee_position']?></td>
                    <td><?php echo $rows['employee_accountnumber']?></td>
                    <td><?php echo $rows['employee_datejoined']?></td>

                </tr>

                <?php } ?>
                

            </table>

        </div>

    </div>

    <!-- <div id="modalBox" class="modal-add-employee">

		<h2>Onboard Employee</h2>

        <form action="" method="post">

            

            <label for="employee_name">Name: </label><br>
            <input id="employee_name" type="text" name="employee_name"><br>

            <label for="employee_salary">Salary: </label><br>
			<input id="employee_salary" type="text" name="employee_salary"><br>

			<label for="employee_position">Position: </label><br>
			<input id="employee_position" type="text" name="employee_position"><br>

			<label for="employee_accountnumber">Account Number: </label><br>
			<input id="employee_accountnumber" type="text" name="employee_accountnumber"><br>

			<button id="login">Onboard :D</button>

        </form>

    </div> -->

    <!-- <script src="../../js/employee.js"></script> -->
    
</body>
</html>