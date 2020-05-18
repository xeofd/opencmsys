<?php

// This script is used for editing license keys in the database

#Pull in dependants
require('../../private/required.php');

#Open a database connection
open_write_connection();

#Create the prepared statement and bind the parameters to it
$statement = $dbt->prepare("UPDATE client_licenses SET client_license_use_date = :client_license_use_date WHERE client_license_link = :link_code");

#Pull the data from the form
$statement->bindParam(':client_license_use_date', $client_license_use_date);
$statement->bindParam(':link_code', $link_code);

$client_license_use_date = date("Y-m-d", strtotime($_POST['edit_license_use_date']));
$link_code = $_REQUEST['i'];

#Execute the statement
$statement->execute();

#Close the statement & database connection
$statement = null;
$dbt = null;  

#Reload to page and kill the script
header('Location: /licenses');
die();

?>