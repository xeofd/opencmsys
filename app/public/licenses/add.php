<?php

// This script is used for adding in license keys to the database


    #Pull in dependants
    require('../../private/required.php');

    #Open a database connection
    open_write_connection();

    #Create link for the assosiated page
    generate_link();

    #Create the prepared statement and bind the parameters to it
    $statement = $dbt->prepare("INSERT INTO client_license (software,user,license_key,use_date,link,client_id)
    VALUES (:add_software,:add_user,:add_license_key,:add_use_date,:add_link,:add_client_id)");
    $statement->bindParam(':add_software', $software);
    $statement->bindParam(':add_user', $user);
    $statement->bindParam(':add_license_key', $key);
    $statement->bindParam(':add_use_date', $use_date);
    $statement->bindParam(':add_link', $link);
    $statement->bindParam(':add_client_id', $add_client_id);

    #Pull the data from the form
    $software = $_POST['add_license_software'];
    $user = $_POST['add_license_user'];
    $key = $_POST['add_license_key'];
    $use_date = date("Y-m-d", strtotime($_POST['add_use_date']));
    $link = $link_code;
    $add_client_id = $_POST['add_client_id'];

    #Execute the statement
    $statement->execute();

    #Close the statement & database connection
    $statement = null;
    $dbt = null;  

    #Reload to page and kill the script
    header('Location: /licenses');
    die();


?>