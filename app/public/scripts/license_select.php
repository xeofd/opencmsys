<?php 

require_once('../../private/required.php');

function pull_data($license_link_code){
    try{
        #Open the read only connection & set found false
        open_read_connection();
        $found = false;
    
        #Prepare the SQL selection
        $query = "SELECT client_license_software,client_license_user,client_license_use_date FROM client_licenses WHERE client_license_link = $license_link_code";
        $pull = $dbt->prepare($query);
        $pull->execute();
        $pull->setFetchMode(PDO::FETCH_ASSOC);
    
        #Pull in and display data
        global $display;
        $display = $pull->fetch();
    
        #Null the PDO and close the connection
        $pull = null;
        $dbt = null;
    
    } catch (PDOException $error){
        die("<div class=\"stack-error--no-data\"><h1>Cannot collect data from database: ".$error->getMessage()."</h1>");
    }
}

?>