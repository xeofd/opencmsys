<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function open_read_connection(){
    global $dbt;
    $dbu = "occmsysro";
    $dbp = "b7(aSxB£Sbc9jv";
    $dbo = [
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ];
    $dbt = new PDO('mysql:host=localhost;dbname=openccmsys;charset=utf8mb4', $dbu, $dbp, $dbo);
};

function open_write_connection(){
    global $dbt;
    $dbu = "occmsysrw";
    $dbp = "x7EM7btFMbCqY!";
    $dbo = [
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ];
    $dbt = new PDO('mysql:host=localhost;dbname=openccmsys;charset=utf8mb4', $dbu, $dbp, $dbo);
};

?>