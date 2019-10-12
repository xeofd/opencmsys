<?php 

ini_set('display_errors', 1);

$dbu = "openccmsys_connector";
$dbp = "xeroKKJ!45";

function open_connection(){
    $dtb = new PDO('mysql:host=localhost;dbname=openccmsys', $dbu, $dbp);
};

?>