<?php

    session_start();

    // Redirect the user to the login page
    header("Location: ../../index.php");

    session_destroy();
    
    exit;

?>