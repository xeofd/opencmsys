<?php

// This script is used for adding in hardware components to the database

#Pull in dependants
require('../../private/required.php');
require('../../private/link_generator.php');

#Open a database connection
open_write_connection();

#Generate the link for the assosiated page
create_link();

#Create the prepared statement and bind the parameters to it
$statement = $dbt->prepare("UPDATE client_hardware SET client_hardware_collection_date = :client_hardware_return_date,client_hardware_is_active = :set_hardware_status WHERE client_hardware_link = :link_code");

#Pull the data from the form
$statement->bindParam(':set_hardware_status', $hardware_status);
$statement->bindParam(':client_hardware_return_date', $hardware_return_date);
$statement->bindParam(':link_code', $link_code);

$hardware_status = $_POST['set_hardware_status'];
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