<?php

// This script is used for adding in license keys to the database

#Pull in dependants
require('../../private/required.php');
require('../../private/filecreation.php');

#Open a database connection
open_write_connection();

#Create link for the assosiated page
create_license_link();

#Create the prepared statement and bind the parameters to it
$statement = $dbt->prepare("INSERT INTO client_licenses (client_license_software,client_license_user,client_license_key,client_license_use_date,client_license_link)
 VALUES (:client_license_software,:client_license_user,:client_license_key,:client_license_use_date,:client_license_link)");
$statement->bindParam(':client_license_software', $client_license_software);
$statement->bindParam(':client_license_user', $client_license_user);
$statement->bindParam(':client_license_key', $client_license_key);
$statement->bindParam(':client_license_use_date', $client_license_use_date);
$statement->bindParam(':client_license_link', $client_license_link);

#Pull the data from the form
$client_license_software = $_POST['add_license_software'];
$client_license_user = $_POST['add_license_user'];
$client_license_key = $_POST['add_license_key'];
$client_license_use_date = date("Y-m-d", strtotime($_POST['add_license_use_date']));
$client_license_link = $license_link_code;

#Execute the statement
$statement->execute();

create_license_page($license_link_code);

#Close the statement & database connection
$statement = null;
$dbt = null;  

#Reload to page and kill the script
header('Location: /licenses');
die();

?>