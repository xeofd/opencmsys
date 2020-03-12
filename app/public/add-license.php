<?php

require('../private/required.php');

// Open a database connection
open_write_connection();

// Create the prepared statement and bind the parameters to it
$statement = $dbt->prepare("INSERT INTO client_licenses (client_license_software,client_license_user,client_license_key,client_license_use_date,client_license_link)
 VALUES (:client_license_software,:client_license_user,:client_license_key,:client_license_use_date,:client_license_link)");
$statement->bindParam(':client_license_software', $client_license_software);
$statement->bindParam(':client_license_user', $client_license_user);
$statement->bindParam(':client_license_key', $client_license_key);
$statement->bindParam(':client_license_use_date', $client_license_use_date);
$statement->bindParam(':client_license_link', $client_license_link);

// Pull the data from the form
$client_license_software = $_POST['add_license_software'];
$client_license_user = $_POST['add_license_user'];
$client_license_key = $_POST['add_license_key'];
$client_license_use_date = date("Y-m-d", strtotime($_POST['add_license_use_date']));
$client_license_link = "license_page.php";

// Execute the statement
$statement->execute();

// Close the statement & database connection
$statement = null;
$dbt = null;  

// Reload to page and kill the script
header('Location: /client-licenses.php');
die();

?>