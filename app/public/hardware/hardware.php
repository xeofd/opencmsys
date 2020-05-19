<?php

# Load the required files
require('../scripts/header.php'); 
require('../scripts/hardware_select.php');

# Check that URL contains a code and set variable
$link_code = $_GET['i'];

if($link_code == null){

    # If no variable is included in the URL redirect to hardware page
    header('Location: /hardware');

}else{

    # Pull in the data
    pull_data($link_code);

    # Set some data variables
    
    if($display['client_hardware_is_active'] == 1){
        # Set job status to ACTIVE if variable equals 1
        $status = "<span class=\"stack-text--active\">ACTIVE</span>";
    } else{
        # Set job status to COMPLETE if variable equals 0
        $status = "<span class=\"stack-text--complete\">COMPLETE</span>";
    };

    if($display['client_hardware_return_date'] === null){
        # If no return date has been set tell the user
        $return_date = "No return date has been set";
    } else{
        # Provide the return date if it has been provided
        $return_date = $display['client_hardware_return_date'];
    }
}

?>

            <!-- Begin body content -->

            <div class="stack-spacer-vertical"></div>

            <div class="stack-container">

                <main class="stack-container" id="stack_container_content">

                    <div class="stack-cell stack-cell--6">
                        
                        <div class="stack-cell--title">

                            <h2>Hardware Issue for Company</h2>

                        </div>

                        <div class="stack-cell--max-width">

                            <div class="stack-container--flex">

                                <div class="stack-cell--5">
                                
                                    <div class="stack-information--block">
                                        <p><span class="stack-text--important">Hardware: </span><?php echo($display['client_hardware_make']." ".$display['client_hardware_model']); ?></p>
                                    </div>

                                    <div class="stack-information--block">
                                        <p><span class="stack-text--important">Client: </span><?php echo($display['client_company_name']);?></p>
                                    </div>

                                    <div class="stack-information--block">
                                        <p><span class="stack-text--important">User: </span><?php echo($display['client_hardware_user']) ?></p>
                                    </div>

                                    <div class="stack-information--block">
                                        <p><span class="stack-text--important">Issue reported on: </span><?php echo($display['client_hardware_initial_contact']) ?></p>
                                    </div>

                                </div>

                                <div class="stack-cell--5">

                                    <div class="stack-information--block">
                                        <p class="stack-text--important">This job is <?php echo($status); ?></p>
                                    </div>

                                    <div class="stack-information--block">
                                        <p><span class="stack-text--important">Collection date: </span><?php echo($display['client_hardware_collection_date']) ?></p>
                                    </div>

                                    <div class="stack-information--block">
                                        <p><span class="stack-text--important">Return date: </span><?php echo($return_date) ?></p>
                                    </div>
                                
                                    <div class="stack-information--block">
                                        <p><span class="stack-text--important">Hardware issue</span> </p>
                                        <p><?php echo($display['client_hardware_issue']) ?></p>
                                    </div>
                                
                                </div>
                            
                            </div>

                        </div>

                    </div>

                    <div class="stack-cell stack-cell--4">

                        <div class="stack-cell--title">

                            <h2>Edit info</h2>

                        </div>

                        <div class="stack-cell--max-width">

                            <form action="edit.php?i=<?php echo($link_code) ?>" method="POST" class="stack-form">

                                <div class="stack-container--form">

                                    <p>Set a return date</p>
                                    <input type="date" name="set_hardware_return_date" class="stack-form--text-input" placeholder="Set a return date" />   

                                </div>

                                <div class="stack-container--form">

                                    <input type="submit" class="stack-form--submit" value="Update hardware" />   

                                </div>

                            </form>

                        </div>

                    </div>

                </main>

            </div>

<?php require('../scripts/footer.php'); ?>