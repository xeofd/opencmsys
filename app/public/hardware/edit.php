<?php

// This script is used for editing hardware components in the database

#Pull in dependants
require('../../private/required.php');

#Open a database connection
open_write_connection();

#Create the prepared statement and bind the parameters to it
$statement = $dbt->prepare("UPDATE client_hardware SET client_hardware_return_date = :client_hardware_return_date WHERE client_hardware_link = :link_code");

#Pull the data from the form
$statement->bindParam(':client_hardware_return_date', $hardware_return_date);
$statement->bindParam(':link_code', $link_code);

$hardware_return_date = date("Y-m-d", strtotime($_POST['set_hardware_return_date']));
$link_code = $_REQUEST['i'];

#Execute the statement
$statement->execute();

#Close the statement & database connection
$statement = null;
$dbt = null;  

#Reload to page and kill the script
header('Location: /hardware');
die();

?>