<?php

require('scripts/required.php');

// Open a database connection
open_connection();

// Create the prepared statement and bind the parameters to it
$statement = $dbt->prepare("INSERT INTO client_component (client_component,client_component_user,client_company_contact,client_problem_description,client_first_contact,client_collection_date,client_drop_off_date)
 VALUES (:client_component,:client_component_user,:client_company_contact,:client_problem_description,:client_first_contact,:client_collection_date,:client_drop_off_date)");
$statement->bindParam(':client_component', $client_component);
$statement->bindParam(':client_component_user', $client_component_user);
$statement->bindParam(':client_company_contact', $client_company_contact);
$statement->bindParam(':client_problem_description', $client_problem_description);
$statement->bindParam(':client_first_contact', $client_first_contact);
$statement->bindParam(':client_collection_date', $client_collection_date);
$statement->bindParam(':client_drop_off_date', $client_drop_off_date);

// Pull the data from the form
$client_component = $_POST['client_component'];
$client_component_user = $_POST['client_component_user'];
$client_company_contact = $_POST['client_company_contact'];
$client_problem_description = $_POST['client_problem_description'];
$client_first_contact = date("Y-m-d", strtotime($_POST['client_component_first_contact']));
$client_collection_date = date("Y-m-d", strtotime($_POST['client_collection_date']));
$client_drop_off_date = date("Y-m-d", strtotime($_POST['client_drop_off_date']));

// Execute the statement
$statement->execute();

// Close the statement & database connection
$statement = null;
$dbt = null;  

// Reload to page and kill the script
header('Location: /');
die();

?>