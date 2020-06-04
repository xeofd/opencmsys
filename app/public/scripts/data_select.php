<?php 

// This code is used to select relevent data to be displayed on the hardware and license pages.
// There is one set of data for each item, the selection pulls in all data it can from the database
// and this allows for any combination of data to displayed

# Pull in required files

require('../../private/required.php');

// Hardware data selection

function hardware_select($link_code){

    // This function is used to select hardware data

    # Set global variables

    global $dbt;
    global $display;

    try{
        #Open the read only connection
        open_read_connection();

        #Prepare the SQL selection
        $query = "SELECT 
                `client_hardware`.`make`,
                `client_hardware`.`model`,
                `client_hardware`.`user`,
                `client_hardware`.`issue`,
                `client_hardware`.`initial_contact`,
                `client_hardware`.`collection_date`,
                `client_hardware`.`return_date`,
                `client_hardware`.`job_status`,
                `client`.`company_name`
            FROM 
                `client_hardware`
            JOIN `client` ON
                `client`.`id` = `client_hardware`.`client_id` 
            WHERE 
                `client_hardware`.`link` = :link_code
        ";
        $pull = $dbt->prepare($query);
        $pull->execute([':link_code'=>$link_code]);
        $pull->setFetchMode(PDO::FETCH_ASSOC);
    
        #Pull in and display data
        $display = $pull->fetch();
    
        #Null the PDO and close the connection
        $pull = null;
        $dbt = null;
    
    } catch (PDOException $error){
        die("<div class=\"stack-error--no-data\"><p>Cannot collect data from database: ".$error->getMessage()."</p>");
    }
};

// License data selector

function license_select($link_code){

    // This function is used to select license data

    # Set global variables

    global $dbt;
    global $display;

    try{
        #Open the read only connection & set found false
        open_read_connection();

        #Prepare the SQL selection
        $query = "SELECT
                `client_license`.`software`,
                `client_license`.`user`,
                `client_license`.`use_date`,
                `client_license`.`license_key`,
                `client_license`.`download_link`,
                `client`.`company_name`
            FROM `client_license`
            JOIN `client` ON
                `client`.`id` = `client_license`.`client_id`
            WHERE
                `client_license`.`link` = :link_code
        ";
        $pull = $dbt->prepare($query);
        $pull->execute([':link_code'=>$link_code]);
        $pull->setFetchMode(PDO::FETCH_ASSOC);
    
        #Pull in and display data
        $display = $pull->fetch();
    
        #Null the PDO and close the connection
        $pull = null;
        $dbt = null;
    
    } catch (PDOException $error){
        die("<div class=\"stack-error--no-data\"><p>Cannot collect data from database: ".$error->getMessage()."</p>");
    }
};


?>