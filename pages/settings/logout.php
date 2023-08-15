<?php

    session_start();

    // Redirect the user to the login page
    header("Location: ../../login.php");

    session_destroy();
    
    exit;

?>