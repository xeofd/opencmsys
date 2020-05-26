<?php

// This script is used for editing license keys in the database

#Pull in dependants
require('../../private/required.php');

#Open a database connection
open_write_connection();

#Create the prepared statement and bind the parameters to it
$statement = $dbt->prepare("UPDATE 
                                client_license 
                            SET 
                                use_date = :edit_use_date,
                                download_link = :edit_download_link
                            WHERE link = :link_code");

#Pull the data from the form
$statement->bindParam(':edit_use_date', $edit_use_date);
$statement->bindParam(':edit_download_link', $edit_download_link);
$statement->bindParam(':link_code', $link_code);

$edit_use_date = date("Y-m-d", strtotime($_POST['edit_use_date']));
$edit_download_link = $_POST['edit_download_link'];
$link_code = $_REQUEST['i'];

#Execute the statement
$statement->execute();

#Close the statement & database connection
$statement = null;
$dbt = null;  

#Reload to page and kill the script
header("Location: /licenses/license.php?i=$link_code");
die();

?>