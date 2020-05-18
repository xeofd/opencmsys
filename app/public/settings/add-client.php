<?php

// This script is used for adding in hardware components to the database

#Pull in dependants
require('../../private/required.php');

#Open a database connection
open_write_connection();

#Create the prepared statement and bind the parameters to it
$statement = $dbt->prepare("INSERT INTO clients (client_company_name,client_contact_number) VALUES (:client_company_name,:client_contact_number)");
$statement->bindParam(':client_company_name', $add_company_name);
$statement->bindParam(':client_contact_number', $add_contact_number);

#Pull the data from the form
$add_company_name = $_POST['add_company_name'];
$add_contact_number = $_POST['add_contact_number'];

#Execute the statement
$statement->execute();

#Close the statement & database connection
$statement = null;
$dbt = null;  

#Reload to page and kill the script
header('Location: /settings');
die();

?>