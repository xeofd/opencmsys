<?php 

require_once('../../private/required.php');

function pull_data($link_code){

    global $dbt;

    try{
        #Open the read only connection & set found false
        open_read_connection();

        #Prepare the SQL selection
        $query = "SELECT client_hardware_make,client_hardware_model,client_hardware_user,client_hardware_issue,client_hardware_initial_contact,client_hardware_collection_date,client_hardware_return_date,client_hardware_is_active FROM client_hardware WHERE client_hardware_link = :link_code";
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