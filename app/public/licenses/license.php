<?php
require('../scripts/header.php'); 
require('../scripts/license_select.php');

$link_code = $_GET['i'];

if($link_code == null){
    header('Location: /licenses');
}
?>

            <!-- Begin body content -->

            <div class="stack-spacer-vertical"></div>

            <div class="stack-container">

                <main class="stack-container" id="stack_container_content">

                    <div class="stack-cell stack-cell--6">
                        
                        <div class="stack-cell--title">

                            <h2>License info for <?php pull_data($link_code); echo($display['client_license_software']); ?></h2>

                        </div>

                        <div class="stack-cell--max-width">

                            <div class="stack-container--flex">

                                <div class="stack-cell--5">
                                
                                    <div class="stack-information--block">
                                        <p><span class="stack-text--important">Software: </span><?php echo($display['client_license_software']) ?></p>
                                    </div>

                                    <div class="stack-information--block">
                                        <p><span class="stack-text--important">Client: </span> </p>
                                    </div>

                                    <div class="stack-information--block">
                                        <p><span class="stack-text--important">User: </span><?php echo($display['client_license_user']) ?></p>
                                    </div>

                                    <div class="stack-information--block">
                                        <p><span class="stack-text--important">Last used on: </span><?php echo($display['client_license_use_date']) ?></p>
                                    </div>

                                </div>

                                <div class="stack-cell--5">
                                
                                    <div class="stack-information--block">
                                        <p><span class="stack-text--important">License key</span> </p>
                                        <p><?php echo($display['client_license_key']) ?></p>
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

                            <form action="edit.php" method="POST" name="form_add_license" class="stack-form">

                                <div class="stack-container--form">

                                    <p>Last used</p>
                                    <input type="date" name="add_license_use_date" class="stack-form--text-input" placeholder="Hardware User" />   

                                </div>

                                <div class="stack-container--form">

                                    <input type="submit" class="stack-form--submit" value="Update license" />   

                                </div>

                            </form>

                        </div>

                    </div>

                </main>

            </div>

<?php require('../scripts/footer.php'); ?>