<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./style/dashboard.css">
</head>
<body>

    <?php

        // importing connection
        require 'connection.php';

        // getting the employee numbers
        function getEmployeeRow($conn){
            $query = "SELECT eid FROM employee";

            $result = mysqli_query($conn, $query);

            if(!$result){
                return null;
            };

            // return number of rows in the table
            $e_row = mysqli_num_rows($result);
            return $e_row;
        };

        // getting the client numbers
        function getClientRow($conn){
            $query = "SELECT client_id FROM client";

            $result = mysqli_query($conn, $query);
            
            if(!$result){
                echo "error occured!";
            };

            // return number of rows in the table
            $c_row = mysqli_num_rows($result);
            return $c_row;
        };

        getEmployeeRow($conn);
        getClientRow($conn);


        session_start();

        if(isset($_SESSION['email'])){

    ?>

    <div class="header">

    <h1>Dashboard</h1>

    <p id="time"></p>

    </div>

    <nav class="side-nav">

    <div class="employee-tab side-tab">

        <a href="./pages/employees/employee.php">
            <img src="./icons/ion_people.png" alt="employees-image" width="55px"><br>
            <p class="employee-text">Employees</p>
        </a>
        

    </div>

    <div class="payroll-tab side-tab">

        <a href="./pages/payrolls/payroll.php">
            <img src="./icons/fluent-mdl2_money.png" alt="payroll-image" width="55px"><br>
            <p class="payroll-text">Payroll</p>
        </a>

    </div>

    <div class="meetings-tab side-tab">

        <a href="./pages/clients/client.php">
            <img src="./icons/mdi_virtual-meeting.png" alt="meeting-image" width="55px"><br>
            <p class="meeting-text">Clients</p>
        </a>

    </div>

    <div class="tickets-tab side-tab">

        <a href="./pages/tickets/ticket.php">
            <img src="./icons/ep_ticket.png" alt="ticket-image" width="55px"><br>
            <p class="ticket-text">Ticket</p>
        </a>

    </div>

    <div class="settings side-tab">

        <a href="./pages/settings/settings.php">
            <img src="./icons/material-symbols_settings.png" alt="setting-image" width="55px"><br>
            <p class="setting-text">Settings</p>
        </a>

    </div>

    </nav>

    <div class="main-container">

        <div class="employees-tab main-tab">

            <h3 class="total-employee-text">Total Employees</h3><br>
            <p> <?php echo getEmployeeRow($conn); ?> </p>

        </div>

        <div class="tickets main-tab">

            <h3 class="total-ticket-text">Total Tickets</h3><br>
            <p></p>

        </div>

        <br><br>

        <div class="meetings main-tab">

            <h3 class="meeting-text">Clients</h3><br>
            <p> <?php echo getClientRow($conn); ?> </p>
            <p></p>

        </div>

        <div class="payrolls main-tab">

            <h3 class="payroll-text">Payroll Left</h3><br>
            <p></p>

        </div>

    </div>

    <!-- <script src="./js/dashboard.js"></script> -->

    <?php }else{
        header("Location: ./login.php");
    } ?>

    <script>
        setInterval(function() {
            var currentTime = new Date ( );    
            var currentHours = currentTime.getHours ( );   
            var currentMinutes = currentTime.getMinutes ( );   
            var currentSeconds = currentTime.getSeconds ( );
            currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;   
            currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;    
            var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";    
            currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;    
            currentHours = ( currentHours == 0 ) ? 12 : currentHours;    
            var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
            document.getElementById("time").innerHTML = currentTimeString;
        }, 1000);
    </script>
    
</body>
</html>