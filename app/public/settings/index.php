<?php 

require('../scripts/header.php');

?>


        <div class="ocms-container--status" id="status_container">

            <script src="../js/core.js"></script>

        </div>

        <div class="ocms-container--flex" id="main_inner">

            <div class="ocms-content--block ocms-cell-breaker ocms-cell--70pc">
                
                <div class="ocms-content--title">

                    <h2>openCCMSYS Settings</h2>

                </div>

                <div class="ocms-container--padded">
                    
                    <p>There currently are no settings to be configured, the main focus of this page is to add clients to the database.</p>

                </div>

            </div>

            <div class="ocms-content--block ocms-cell--30pc">

                <div class="ocms-content--title">

                    <h2>Add a client</h2>

                </div>

                <div class="stack-cell--max-width">

                    <form action="add-client.php" method="POST" name="form_add_hardware" class="ocms-form">

                        <div class="ocms-container--flex">

                            <div class="ocms-cell--25pc">
                                <p>Company name</p>
                            </div>

                            <div class="ocms-cell--80pc ocms-container--padded">
                                <input type="text" name="add_company_name" class="ocms-form--text-input" placeholder="Company Name" />
                            </div>

                        </div>

                        <div class="ocms-container--flex">

                            <div class="ocms-cell--25pc">
                                <p>Contact number</p>
                            </div>

                            <div class="ocms-cell--80pc ocms-container--padded">
                                <input type="text" name="add_contact_number" class="ocms-form--text-input" placeholder="Contact Number" />
                            </div>

                        </div>

                        <div class="ocms-container--flex">

                            <input type="submit" class="ocms-form--submit" value="Add client" />   

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </main>

<?php require('../scripts/footer.php'); ?>