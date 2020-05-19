<?php 

require_once('../../private/required.php');

function pull_data($link_code){

    global $dbt;

    try{
        #Open the read only connection & set found false
        open_read_connection();

        #Prepare the SQL selection
        $query = "SELECT
                `client_licenses`.`client_license_software`,
                `client_licenses`.`client_license_user`,
                `client_licenses`.`client_license_use_date`,
                `client_licenses`.`client_license_key`,
                `clients`.`client_company_name`
            FROM `client_licenses`
            JOIN `clients` ON
                `clients`.`client_id` = `client_licenses`.`client_id`
            WHERE
                `client_licenses`.`client_license_link` = :link_code
        ";
        $pull = $dbt->prepare($query);
        $pull->execute([':link_code'=>$link_code]);
        $pull->setFetchMode(PDO::FETCH_ASSOC);
    
        #Pull in and display data
        global $display;
        $display = $pull->fetch();
    
        #Null the PDO and close the connection
        $pull = null;
        $dbt = null;
    
    } catch (PDOException $error){
        die("<div class=\"stack-error--no-data\"><p>Cannot collect data from database: ".$error->getMessage()."</p>");
    }
}

?>