<?php require('../scripts/header.php'); ?>

            <!-- Begin body content -->

            <div class="stack-spacer-vertical"></div>

            <div class="stack-container">

                <main class="stack-container" id="stack_container_content">

                    <div class="stack-cell stack-cell--6">
                        
                        <div class="stack-cell--title">

                            <h2>openCCMSYS Settings</h2>

                        </div>

                        <div class="stack-cell--max-width stack-information--block">
                            
                            <p>There currently are no settings to be configured, the main focus of this page is to add clients to the database.</p>

                        </div>

                    </div>

                    <div class="stack-cell stack-cell--4">

                        <div class="stack-cell--title">

                            <h2>Add a client</h2>

                        </div>

                        <div class="stack-cell--max-width">

                            <form action="add-client.php" method="POST" name="form_add_hardware" class="stack-form">

                                <div class="stack-container--form">

                                    <p>Company name</p>
                                    <input type="text" name="add_company_name" class="stack-form--text-input" placeholder="Company Name" />

                                </div>

                                <div class="stack-container--form">

                                    <p>Contact number</p>
                                    <input type="text" name="add_contact_number" class="stack-form--text-input" placeholder="Contact Number" />

                                </div>

                                <div class="stack-container--form">

                                    <input type="submit" class="stack-form--submit" value="Add client" />   

                                </div>

                            </form>

                        </div>

                    </div>

                </main>

            </div>

<?php require('../scripts/footer.php'); ?>