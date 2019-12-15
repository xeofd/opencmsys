<?php 

ini_set('display_errors', 1);

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
    $dbp = "x7EM7,tFMbCqY!";
    $dbo = [
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ];
    $dbt = new PDO('mysql:host=localhost;dbname=openccmsys;charset=utf8mb4', $dbu, $dbp, $dbo);
};

?>