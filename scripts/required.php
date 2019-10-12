<?php 

ini_set('display_errors', 1);

function open_connection(){
    $dbu = "openccmsys_connector";
    $dbp = "xeroKKJ!45";
    $dbt = new PDO('mysql:host=localhost;dbname=openccmsys', $dbu, $dbp);
};

?>