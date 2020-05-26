<?php

// This script is used for editing hardware components in the database

#Pull in dependants
require('../../private/required.php');

#Open a database connection
open_write_connection();

#Create the prepared statement and bind the parameters to it
$statement = $dbt->prepare("UPDATE 
                                `client_hardware` 
                            SET 
                                `client_hardware`.`return_date` = :edit_return_date 
                            WHERE 
                                `client_hardware`.`link` = :link_code");

#Pull the data from the form
$statement->bindParam(':edit_return_date', $edit_return_date);
$statement->bindParam(':link_code', $link_code);

$edit_return_date = date("Y-m-d", strtotime($_POST['edit_return_date']));
$link_code = $_REQUEST['i'];

#Execute the statement
$statement->execute();

#Close the statement & database connection
$statement = null;
$dbt = null;  

#Reload to page and kill the script
header("Location: /hardware/hardware.php?i=$link_code");
die();

?>