<?php

require('scripts/required.php');

// Open a database connection
open_connection();

// Create the prepared statement and bind the parameters to it
$statement = $dbt->prepare("INSERT INTO client_software (client_software_name, client_software_user, client_software_pc, client_software_key, client_software_first_use) 
VALUES (:client_software_name, :client_software_user, :client_software_pc, :client_software_key, :client_software_first_use);");
$statement->bindParam(':client_software_name', $client_software_name);
$statement->bindParam(':client_software_user', $client_software_user);
$statement->bindParam(':client_software_pc', $client_software_pc);
$statement->bindParam(':client_software_key', $client_software_key);
$statement->bindParam(':client_software_first_use', $client_component_first_use);

// Pull the data from the form
$client_software_name = $_POST['client_software_name'];
$client_software_user = $_POST['client_software_user'];
$client_software_pc = $_POST['client_software_pc'];
$client_software_key = $_POST['client_software_key'];
$client_component_first_use = date("Y-m-d", strtotime($_POST['client_software_first_use']));

// Execute the statement
$statement->execute();

// Close the statement & database connection
$statement = null;
$dbt = null;  

// Reload to page and kill the script
header('Location: /');
die();

?>