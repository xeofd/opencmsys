<?php

require_once('../private/required.php');

try{
    //Open the read only connection & set found false
    open_read_connection();
    $found = false;

    //Prepare the SQL selection
    $query = "SELECT client_license_software,client_license_user,client_license_use_date,client_license_link FROM client_licenses";
    $pull = $dbt->prepare($query);
    $pull->execute();
    $pull->setFetchMode(PDO::FETCH_ASSOC);

    //Pull in and display data
    while($display = $pull->fetch()){
        echo("<tr class=\"stack-table--data-row\">
        <td class=\"stack-table--data\" name=\"license_list_software\">".$display['client_license_software']."</td>".
        "<td class=\"stack-table--data\" name=\"license_list_client\">Company</td>".
        "<td class=\"stack-table--data\" name=\"license_list_user\">".$display['client_license_user']."</td>".
        "<td class=\"stack-table--data\" name=\"license_list_use_date\">".$display['client_license_use_date'])."</td>".
        "<td class=\"stack-table--data\" name=\"license_list_link\"><a href=\"".$display['client_license_link']."\" class=\"stack-table--link\">More info</a></td></tr>";
        $found = true;
    }
    if (!$found){
        echo("<div class=\"stack-error--no-data\"><h2>There are no license keys to display</h2></div>");
    }

    //Null the PDO and close the connection
    $pull = null;
    $dbt = null;

} catch (PDOException $error){
    die("<div class=\"stack-error--heads-up\"><h1>Cannot collect data from database: ".$pe->getMessage()."</h1>");
}