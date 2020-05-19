<?php

try{
    //Open the read only connection & set found false
    open_read_connection();
    $found = false;

    //Prepare the SQL selection
    $query = "SELECT client_id,client_company_name FROM clients";
    $pull = $dbt->prepare($query);
    $pull->execute();
    $pull->setFetchMode(PDO::FETCH_ASSOC);

    //Pull in and display data
    while($display = $pull->fetch()){
        echo("<option value=".htmlspecialchars($display['client_id'], ENT_QUOTES).">".htmlspecialchars($display['client_company_name'])."</option>");
        $found = true;
    }
    if (!$found){
        echo("<option>There are no clients in the database</option>");
    }

    //Null the PDO and close the connection
    $pull = null;
    $dbt = null;

} catch (PDOException $error){
    die("<div class=\"stack-error--no-data\"><p>Cannot collect data from database: ".$error->getMessage()."</p>");
}

?>