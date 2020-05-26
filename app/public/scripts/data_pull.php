<?php 

// This code is used to pull relevent data to be displayed on the homepage and on main list pages.
// There are two sets of table data that can be produced, homepage data which will display less information but is easier to read
// and full list page data which will display more information for better item selection.

# Load in required files
if($homepage == true){
    require_once('../private/required.php');
}else{
    require_once('../../private/required.php');
}

// Client data pull

function client_pull(){

    # This function is used for displaying client information

    # Set global variables

    global $dbt;

    try{
        
        # Open the read only connection & set found false
        open_read_connection();
        $found = false;

        # Prepare the SQL selection
        $query = "SELECT
                    `client`.`id`,
                    `client`.`company_name`
                FROM client";
        $pull = $dbt->prepare($query);
        $pull->execute();
        $pull->setFetchMode(PDO::FETCH_ASSOC);

        # Check what format type to display
        while($display = $pull->fetch()){
            echo("<option value=".htmlspecialchars($display['id'], ENT_QUOTES).">".htmlspecialchars($display['company_name'])."</option>");
            $found = true;
        };
        if (!$found){
            echo("<option>There are no clients in the database</option>");
        };

        # Null the PDO and close the connection
        $pull = null;
        $dbt = null;

    } catch (PDOException $error){
        die("<div class=\"stack-error--no-data\"><p>Cannot collect data from database: ".$error->getMessage()."</p>");
    };

};

// Hardware data pull

function hardware_pull(){

    # This function is used for pulling in hardware data to be displayed in tables

    # Set gloabl variables

    global $dbt;
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
        $pull = $dbt->prepare($query);
        $pull->execute();
        $pull->setFetchMode(PDO::FETCH_ASSOC);
    
        # Pull in and display data
        if($homepage == true){
            while($display = $pull->fetch()){
                echo("<tr class=\"ocms-table--row\">
                <td class=\"ocms-table--data\" name=\"component_list_hardware\">".$display['model']."</td>".
                "<td class=\"ocms-table--data\" name=\"component_list_client\">".$display['company_name']."</td>".
                "<td class=\"ocms-table--data\" id=\"ocms-table--hardware-issue\" name=\"component_list_issue\">".$display['issue']."</td>".
                "<td class=\"ocms-table--data\" name=\"component_list_link\"><a href=\"hardware/hardware.php?i=".$display['link']."\" class=\"ocms-table--link\">More info</a></td></tr>");
                $found = true;
            }
        } else{
            while($display = $pull->fetch()){
                echo("<tr class=\"ocms-table--row\">
                <td class=\"ocms-table--data\" name=\"component_list_hardware\">".$display['model']."</td>".
                "<td class=\"ocms-table--data\" name=\"component_list_client\">".$display['company_name']."</td>".
                "<td class=\"ocms-table--data\" name=\"component_list_user\">".$display['user']."</td>".
                "<td class=\"ocms-table--data\" id=\"ocms-table--hardware-issue\" name=\"component_list_issue\">".$display['issue']."</td>".
                "<td class=\"ocms-table--data\" name=\"component_list_date\">".$display['recent_contact']."</td>".
                "<td class=\"ocms-table--data\" name=\"component_list_link\"><a href=\"hardware.php?i=".$display['link']."\" class=\"ocms-table--link\">More info</a></td></tr>");
                $found = true;
            }
        }
        if (!$found){
            echo("</tbody></table><div class=\"ocms-container--flex ocms-status ocms-status--warning\" id=\"alert_container\">
                    <div class=\"ocms-status--icon ocms-cell--10pc\">
                        <span class=\"material-icons md-36\">warning</span>
                    </div>
                    <div class=\"ocms-status--text ocms-cell--80pc\">
                        <p>Warning: No items to display</p>
                    </div>
                    <div class=\"ocms-status--close ocms-cell--10pc\">
                        <button class=\"ocms-status--close\" onclick=\"close_element()\"><span class=\"material-icons md-36\">close</span></button>
                    </div>
                </div>");
        }
    
        # Null the PDO and close the connection
        $pull = null;
        $dbt = null;
    
    } catch (PDOException $error){
        die("<div class=\"stack-error--no-data\"><p>Cannot collect data from database: ".$error->getMessage()."</p>");
    }

};

// License data pull

function license_pull(){

    # This function is used to pull and display license information

    # Set gloabl variables

    global $dbt;
    global $homepage;
    
    try{
        # Open the read only connection & set found false
        open_read_connection();
        $found = false;
    
        # Prepare the SQL selection
        $query = "SELECT 
                    `client_license`.`software`,
                    `client_license`.`user`,
                    `client_license`.`use_date`,
                    `client_license`.`link`,
                    `client`.`company_name`
                FROM 
                    `client_license`          
                JOIN `client` ON
                    `client`.`id` = `client_license`.`client_id`";
        $pull = $dbt->prepare($query);
        $pull->execute();
        $pull->setFetchMode(PDO::FETCH_ASSOC);
    
        # Pull in and display data
        if($homepage == true){
            # If user is on homepage display fetched data in this format
            while($display = $pull->fetch()){
                if ($display['company_name'] == null){
                    $comapny_name = "No company";
                } else{
                    $company_name = $display['company_name'];
                };
                echo("<tr class=\"ocms-table--row\">
                <td class=\"ocms-table--data\">".htmlspecialchars($display['software'], ENT_QUOTES)."</td>
                <td class=\"ocms-table--data\">".$company_name."</td>
                <td class=\"ocms-table--data\">".htmlspecialchars($display['user'], ENT_QUOTES)."</td>
                <td class=\"ocms-table--data\"><a href=\"licenses/license.php?i=".htmlspecialchars($display['link'], ENT_QUOTES)."\">More info</a></td>
                </tr>");
                $found = true;
            }
        }else{
            # If user is on main list page display fetched data in this format
            while($display = $pull->fetch()){
                if ($display['company_name'] == null){
                    $comapny_name = "No company";
                } else{
                    $company_name = $display['company_name'];
                };
                echo("<tr class=\"ocms-table--row\">
                <td class=\"ocms-table--data\" name=\"license_list_software\">".htmlspecialchars($display['software'], ENT_QUOTES)."</td>
                <td class=\"ocms-table--data\" name=\"license_list_client\">".$company_name."</td>
                <td class=\"ocms-table--data\" name=\"license_list_user\">".htmlspecialchars($display['user'], ENT_QUOTES)."</td>
                <td class=\"ocms-table--data\" name=\"license_list_use_date\">".htmlspecialchars($display['use_date'], ENT_QUOTES)."</td>
                <td class=\"ocms-table--data\" name=\"license_list_link\"><a href=\"license.php?i=".htmlspecialchars($display['link'], ENT_QUOTES)."\">More info</a></td>
                </tr>");
                $found = true;
            }
        }
        if (!$found){
            # If nothing is found inform user
            echo("</tbody></table><div class=\"ocms-container--flex ocms-status ocms-status--warning\" id=\"alert_container\">
                    <div class=\"ocms-status--icon ocms-cell--10pc\">
                        <span class=\"material-icons md-36\">warning</span>
                    </div>
                    <div class=\"ocms-status--text ocms-cell--80pc\">
                        <p>Warning: No items to display</p>
                    </div>
                    <div class=\"ocms-status--close ocms-cell--10pc\">
                        <button class=\"ocms-status--close\" onclick=\"close_element()\"><span class=\"material-icons md-36\">close</span></button>
                    </div>
                </div>");
        }
    
        # Null the PDO and close the connection
        $pull = null;
        $dbt = null;
    
    } catch (PDOException $error){
        die("<div class=\"stack-error--no-data\"><p>Cannot collect data from database: ".$error->getMessage()."</p>");
    }

};

?>