<?php

require_once('../private/required.php');

try{
    //Open the read only connection & set found false
    open_read_connection();
    $found = false;

    //Prepare the SQL selection
    $query = "SELECT client_hardware_model,client_hardware_user,client_hardware_issue,client_hardware_recent_contact,client_hardware_is_active,client_hardware_link FROM client_hardware";
    $pull = $dbt->prepare($query);
    $pull->execute();
    $pull->setFetchMode(PDO::FETCH_ASSOC);

    //Pull in and display data
    while($display = $pull->fetch()){
        echo("<tr class=\"stack-table--data-row\">
        <td class=\"stack-table--data\" name=\"component_list_hardware\">".$display['client_hardware_model']."</td>".
        "<td class=\"stack-table--data\" name=\"component_list_client\">Company</td>".
        "<td class=\"stack-table--data\" name=\"component_list_user\">".$display['client_hardware_user']."</td>".
        "<td class=\"stack-table--data\" name=\"component_list_issue\">".$display['client_hardware_issue']."</td>".
        "<td class=\"stack-table--data\" name=\"component_list_date\">".$display['client_hardware_recent_contact']."/td>".
        "<td class=\"stack-table--data\" name=\"component_list_complete\">"."</td>".
        "<td class=\"stack-table--data\" name=\"component_list_link\"><a href=\"#\" class=\"".$display['client_hardware_link']."\" class=\"stack-table--link\">More info</a></td></tr>");
        $found = true;
    }
    if (!$found){
        echo("<div class=\"stack-error--no-data\"><h2>There are no license keys to display</h2></div>");
    }

    //Null the PDO and close the connection
    $pull = null;
    $dbt = null;

} catch (PDOException $error){
    die("<div class=\"stack-error--heads-up\"><h3>Cannot collect data from database: </h3><p>".$error->getMessage()."</p>");
}

?>