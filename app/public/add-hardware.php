<?php

require('../private/required.php');

// Open a database connection
open_write_connection();

// Create the prepared statement and bind the parameters to it
$statement = $dbt->prepare("INSERT INTO client_hardware (client_hardware_make,client_hardware_model,client_hardware_user,client_hardware_issue,client_hardware_initial_contact,client_hardware_collection_date)
 VALUES (:add_hardware_make,:add_hardware_model,:add_hardware_user,:add_hardware_issue,:add_hardware_initial_contact,:add_hardware_collection)");
$statement->bindParam(':add_hardware_make', $add_hardware_make);
$statement->bindParam(':add_hardware_model', $add_hardware_model);
$statement->bindParam(':add_hardware_user', $add_hardware_user);
$statement->bindParam(':add_hardware_issue', $add_hardware_issue);
$statement->bindParam(':add_hardware_initial_contact', $add_hardware_initial_contact);
$statement->bindParam(':add_hardware_collection', $add_hardware_collection);

// Pull the data from the form
$add_hardware_make = $_POST['add_hardware_make'];
$add_hardware_model = $_POST['add_hardware_model'];
$add_hardware_user = $_POST['add_hardware_user'];
$add_hardware_issue = $_POST['add_hardware_issue'];
$add_hardware_initial_contact = date("Y-m-d", strtotime($_POST['add_hardware_initial_contact']));
$add_hardware_collection = date("Y-m-d", strtotime($_POST['add_hardware_collection']));

// Execute the statement
$statement->execute();

// Close the statement & database connection
$statement = null;
$dbt = null;  

// Reload to page and kill the script
header('Location: /');
die();

?>