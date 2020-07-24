<?php

// Required functions for system functionality. 
// This script must be loaded into every page to allow proper system function.

# Set ERROR reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection functions

function open_db_connection($type){
    // Open database connection

    # Check connection type and set credentials as needed
    if ($type == "read"){
        # Set read only credentials
        $database_user = 'occmsysro';
        $database_password = 'tvtE$pLH8yyh';
    } elseif ($type == "write"){
        # Set read/write credentials
        $database_user = 'occmsysro';
        $database_password = 'tvtE$pLH8yyh';
    } 

    # Set global & local variables
    global $database_connection;
    $database_error = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

    # Set the databse connection
    $database_connection = new PDO('mysql:host=localhost;dbname=openccmsys;charset=utf8mb4', $database_user, $database_password, $database_error);

}

// Page ID generator

function generate_link(){
    // Generate page ID

    # Set global & local variables
    global $page_id;
    $charset = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    # Generate the page ID
    $page_id = substr(str_shuffle($charset), 0, 24);

}


?>