<?php

// This script is used for adding in license keys to the database

#Pull in dependants
require('../../private/required.php');
require('../../private/filecreation.php');

#Open a database connection
open_write_connection();

#Create the prepared statement and bind the parameters to it
$statement = $dbt->prepare("INSERT INTO client_licenses (client_license_use_date) VALUES (:client_license_use_date)");
$statement->bindParam(':client_license_use_date', $client_license_use_date);

#Pull the data from the form
$client_license_use_date = date("Y-m-d", strtotime($_POST['add_license_use_date']));

#Execute the statement
$statement->execute();

#Close the statement & database connection
$statement = null;
$dbt = null;  

#Reload to page and kill the script
header('Location: /licenses');
die();

?>