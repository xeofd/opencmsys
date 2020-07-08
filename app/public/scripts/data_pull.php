<?php 

//  This script is contains all of the functions needed to allow
//  for pulling in data-sets from the MySQL database and to properly
//  display this data.

//  Load in required files

    require('./../private/required.php');

//  Client data-pull

function client_pull(){

    // Use this function to pull in the client list for
    // form drop-down menus

    # Set global variables
    global $database_connection;

    try{

        # Open a read-only database connection
        open_read_connection();
        $found = false;

        # Prepair the SQL selection
        $query = "SELECT
                    `client`.`id`,
                    `client`.`company_name`
                  FROM client";
        $pull = $database_connection->prepare($query);
        $pull->execute();
        $pull->setFetchMode(PDO::FETCH_ASSOC);

        # Check what format to display
        while ($display = $pull->fetch()){
            echo("<option value=".htmlspecialchars($display['id'], ENT_QUOTES).">".htmlspecialchars($display['company_name'])."</option>");
            $found = true;
        }
        if (!$found){
            echo("<option>There are no clients in the database</option>");
        }

        # Null the PDO and close the connection
        $pull = null;
        $dbt = null;

    } catch (PDOException $error){
        die("<option value=0>Cannot connect to DB</option>");
    }

}

// Hardware data-pull

function hardware_pull(){

    // Use this function to pull in hardware data
    // to be displayed

    # Set gloabl variables

    global $database_connection;
    global $homepage;

    try{
        # Open the read only connection & set found false
        open_read_connection();
        $found = false;
    
        # Prepare the SQL selection
        $query = "SELECT 
                    `client_hardware`.`model`,
                    `client_hardware`.`user`,
                    `client_hardware`.`issue`,
                    `client_hardware`.`recent_contact`,
                    `client_hardware`.`job_status`,
                    `client_hardware`.`link`,
                    `client`.`company_name`
                FROM 
                    `client_hardware`
                JOIN `client` ON
                    `client`.`id` = `client_hardware`.`client_id`";
        $pull = $database_connection->prepare($query);
        $pull->execute();
        $pull->setFetchMode(PDO::FETCH_ASSOC);
    
        # Pull in and display data
        if($homepage == true){
            while($display = $pull->fetch()){
                echo("<tr class=\"bloc-table--row\">
                <td class=\"bloc-table--data\" name=\"component_list_hardware\">".$display['model']."</td>".
                "<td class=\"bloc-table--data\" name=\"component_list_client\">".$display['company_name']."</td>".
                "<td class=\"bloc-table--data\" id=\"bloc-table--hardware-issue\" name=\"component_list_issue\">".$display['issue']."</td>".
                "<td class=\"bloc-table--data\" name=\"component_list_link\"><a href=\"hardware/hardware.php?i=".$display['link']."\" class=\"bloc-table--link\">More info</a></td></tr>");
                $found = true;
            }
        } else{
            while($display = $pull->fetch()){
                echo("<tr class=\"bloc-table--row\">
                <td class=\"bloc-table--data\" name=\"component_list_hardware\">".$display['model']."</td>".
                "<td class=\"bloc-table--data\" name=\"component_list_client\">".$display['company_name']."</td>".
                "<td class=\"bloc-table--data\" name=\"component_list_user\">".$display['user']."</td>".
                "<td class=\"bloc-table--data\" id=\"bloc-table--hardware-issue\" name=\"component_list_issue\">".$display['issue']."</td>".
                "<td class=\"bloc-table--data\" name=\"component_list_date\">".$display['recent_contact']."</td>".
                "<td class=\"bloc-table--data\" name=\"component_list_link\"><a href=\"hardware.php?i=".$display['link']."\" class=\"bloc-table--link\">More info</a></td></tr>");
                $found = true;
            }
        }
        if (!$found){
            echo("</tbody></table><div class=\"bloc-container--flex bloc-status bloc-status--warning\" id=\"alert_container\">
                    <div class=\"bloc-status--icon bloc-cell--10pc\">
                        <span class=\"material-icons md-36\">warning</span>
                    </div>
                    <div class=\"bloc-status--text bloc-cell--80pc\">
                        <p>Warning: No items to display</p>
                    </div>
                    <div class=\"bloc-status--close bloc-cell--10pc\">
                        <button class=\"bloc-status--close\" onclick=\"close_element()\"><span class=\"material-icons md-36\">close</span></button>
                    </div>
                </div>");
        }
    
        # Null the PDO and close the connection
        $pull = null;
        $dbt = null;
    
    } catch (PDOException $error){
        die("</tbody></table><div>
                <p>No connection to the database</p>
            </div>");
    }

};

?>