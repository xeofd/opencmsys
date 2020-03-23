<?php

// This script is used for adding in hardware components to the database

#Pull in dependants
require('../../private/required.php');
require('../../private/filecreation.php');

#Open a database connection
open_write_connection();

#Generate the link for the assosiated page
create_hardware_link();

#Create the prepared statement and bind the parameters to it
$statement = $dbt->prepare("INSERT INTO client_hardware (client_hardware_make,client_hardware_model,client_hardware_user,client_hardware_issue,client_hardware_initial_contact,client_hardware_recent_contact,client_hardware_collection_date,client_hardware_is_active,client_hardware_link)
 VALUES (:add_hardware_make,:add_hardware_model,:add_hardware_user,:add_hardware_issue,:add_hardware_initial_contact,:add_hardware_recent_contact,:add_hardware_collection,:add_hardware_set_active,:add_hardware_set_link)");
$statement->bindParam(':add_hardware_make', $add_hardware_make);
$statement->bindParam(':add_hardware_model', $add_hardware_model);
$statement->bindParam(':add_hardware_user', $add_hardware_user);
$statement->bindParam(':add_hardware_issue', $add_hardware_issue);
$statement->bindParam(':add_hardware_initial_contact', $add_hardware_initial_contact);
$statement->bindParam(':add_hardware_recent_contact', $add_hardware_recent_contact);
$statement->bindParam(':add_hardware_collection', $add_hardware_collection);
$statement->bindParam(':add_hardware_set_active', $add_hardware_set_active);
$statement->bindParam(':add_hardware_set_link', $add_hardware_set_link);

#Pull the data from the form
$add_hardware_make = $_POST['add_hardware_make'];
$add_hardware_model = $_POST['add_hardware_model'];
$add_hardware_user = $_POST['add_hardware_user'];
$add_hardware_issue = $_POST['add_hardware_issue'];
$add_hardware_initial_contact = date("Y-m-d", strtotime($_POST['add_hardware_initial_contact']));
$add_hardware_recent_contact = date("Y-m-d", strtotime($_POST['add_hardware_initial_contact']));
$add_hardware_collection = date("Y-m-d", strtotime($_POST['add_hardware_collection']));
$add_hardware_set_active = 1;
$add_hardware_set_link = $hardware_link_code;

#Execute the statement
$statement->execute();

#Close the statement & database connection
$statement = null;
$dbt = null;  

#Reload to page and kill the script
header('Location: /hardware');
die();

?>