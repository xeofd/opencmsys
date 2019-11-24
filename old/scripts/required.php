<?php 

ini_set('display_errors', 1);

function open_connection(){
    global $dbt;
    $dbu = "openccmsys_connector";
    $dbp = "xeroKKJ!45";
    $dbo = [
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ];
    $dbt = new PDO('mysql:host=localhost;dbname=openccmsys;charset=utf8mb4', $dbu, $dbp, $dbo);
};

?>