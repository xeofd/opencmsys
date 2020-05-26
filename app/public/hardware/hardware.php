<?php

# Load the required files
require('../scripts/header.php'); 
require('../scripts/data_select.php');

# Check that URL contains a code and set variable
$link_code = $_GET['i'];

if($link_code == null){
    # If no variable is included in the URL redirect to hardware page
    header('Location: /hardware');
}else{

    # Run the selection function
    hardware_select($link_code);

    # Run some checks on data
    if($display['job_status'] == 1){
        # Set status of the job
        $status = "ACTIVE";
    }else{
        # Set status of the job
        $status = "COMPLETE";
    }

    if($display['return_date'] == null){
        $return_date = "No return date set";
    }else{
        $return_date = $display['return_date'];
    }

}

?>

            <!-- Begin body content -->

            <main class="stack-container" id="stack_container_content">

                <div class="ocms-container--flex">
                
                    <div class="ocms-content--block ocms-cell--70pc ocms-cell-breaker">
                        
                        <div class="ocms-content--title">

                            <h2>Hardware Issue for <?php echo($display['company_name']); ?></h2>

                        </div>

                        <div class="ocms-container--padded">

                            <div class="ocms-container--flex">

                                <div class="ocms-cell--50pc">
                                
                                    <div class="ocms-content--information">
                                        <p><span class="stack-text--important">Hardware: </span><?php echo($display['make']." ".$display['model']); ?></p>
                                    </div>

                                    <div class="ocms-content--information">
                                        <p><span class="stack-text--important">Client: </span><?php echo($display['company_name']);?></p>
                                    </div>

                                    <div class="ocms-content--information">
                                        <p><span class="stack-text--important">User: </span><?php echo($display['user']) ?></p>
                                    </div>

                                    <div class="ocms-content--information">
                                        <p><span class="stack-text--important">Issue reported on: </span><?php echo($display['initial_contact']) ?></p>
                                    </div>

                                    <div class="ocms-content--information">
                                        <p class="stack-text--important">This job is <?php echo($status); ?></p>
                                    </div>

                                </div>

                                <div class="ocms-cell--50pc">

                                    <div class="ocms-content--information">
                                        <p><span class="stack-text--important">Collection date: </span><?php echo($display['collection_date']) ?></p>
                                    </div>

                                    <div class="ocms-content--information">
                                        <p><span class="stack-text--important">Return date: </span><?php echo($return_date) ?></p>
                                    </div>
                                
                                    <div class="ocms-content--information">
                                        <p><span class="stack-text--important">Hardware issue</span> </p>
                                        <p><?php echo($display['issue']) ?></p>
                                    </div>
                                
                                </div>
                            
                            </div>

                        </div>

                    </div>

                    <div class="ocms-content--block ocms-cell--30pc">

                        <div class="ocms-content--title">

                            <h2>Edit info</h2>

                        </div>

                        <div>

                            <form action="edit.php?i=<?php echo($link_code) ?>" method="POST" class="stack-form">

                                <div class="ocms-container--flex ocms-container--padded">

                                    <div class="ocms-cell--25pc">
                                        <p>Set return date</p>
                                    </div>

                                    <div class="ocms-cell--80pc">
                                        <input type="date" name="edit_return_date" class="ocms-form--text-input" placeholder="Set a return date" />
                                    </div>   

                                </div>

                                <div>

                                    <input type="submit" class="ocms-form--submit" value="Update hardware" />   

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </main>

<?php require('../scripts/footer.php'); ?>