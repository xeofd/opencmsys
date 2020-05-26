<?php 

// Required functions for the system. All pages will require one of these functions to work properly.

# Set Error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connections

function open_read_connection(){
    # Open a read only connection to the database using RO credentials
    global $dbt;
    $dbu = "occmsysro";
    $dbp = "{ENTER YOUR occmsysro PASSWORD}";
    $dbo = [
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ];
    $dbt = new PDO('mysql:host=localhost;dbname=openccmsys;charset=utf8mb4', $dbu, $dbp, $dbo);
};

function open_write_connection(){
    # Open a read/write connection to the database using RW credentials
    global $dbt;
    $dbu = "occmsysrw";
    $dbp = "{ENTER YOUR occmsysrw PASSWORD}";

    $dbo = [
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ];
    $dbt = new PDO('mysql:host=localhost;dbname=openccmsys;charset=utf8mb4', $dbu, $dbp, $dbo);
};

// Generators

function generate_link(){
    # Generate the random alphanumeric link for database items 
    global $link_code;
    # Set character set to be used for generating links
    $charset = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $link_code = substr(str_shuffle($charset), 0, 24);
}

?>