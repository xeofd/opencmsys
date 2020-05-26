<?php 

$homepage = false;

require('../scripts/header.php'); 
require('../scripts/data_pull.php')

?>

                <div class="ocms-container--status" id="status_container">

                    <script src="../js/core.js"></script>
                     
                </div>

                <div class="ocms-container--flex" id="main_inner">

                    <div class="ocms-content--block ocms-cell-breaker ocms-cell--70pc">
                        
                        <div class="ocms-content--title">

                            <h2>Client license list</h2>

                        </div>

                        <div>

                            <table class="ocms-content--table">
                                <thead>
                                    <tr>
                                        <th class="ocms-table--data-head">Software</th>
                                        <th class="ocms-table--data-head">Client</th>
                                        <th class="ocms-table--data-head">User</th>
                                        <th class="ocms-table--data-head">Used on</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php license_pull(); ?>
                                </tbody>
                            </table>

                        </div>

                    </div>

                    <div class="ocms-content--block ocms-cell-breaker ocms-cell--30pc">

                        <div class="ocms-content--title">

                            <h2>Add license</h2>

                        </div>

                        <div>

                            <form action="add.php" method="POST" name="form_add_license" class="ocms-form">

                                <div class="ocms-container--flex">

                                    <div class="ocms-cell--25pc">
                                        <p>Software</p>
                                    </div>
                        
                                    <div class="ocms-cell--80pc ocms-container--padded">
                                        <input type="text" name="add_license_software" class="ocms-form--text-input" placeholder="Software" />
                                    </div>

                                </div>

                                <div class="ocms-container--flex">

                                    <div class="ocms-cell--25pc">
                                        <p>Original User</p>
                                    </div>

                                    <div class="ocms-cell--80pc ocms-container--padded">
                                        <input type="text" name="add_license_user" class="ocms-form--text-input" placeholder="Original user" />
                                    </div>

                                </div>

                                <div class="ocms-container--flex">

                                    <div class="ocms-cell--25pc">
                                        <p>License Key</p>
                                    </div>

                                    <div class="ocms-cell--80pc ocms-container--padded">
                                        <textarea name="add_license_key" class="ocms-form--text-area" placeholder="Add license key" maxlength="1024"></textarea>
                                    </div>

                                </div>

                                <div class="ocms-container--flex">

                                    <div class="ocms-cell--25pc">
                                        <p>Client</p>
                                    </div>

                                    <div class="ocms-cell--80pc ocms-container--padded">
                                        <select class="ocms-form--select" name="add_client_id">
                                            <option id="option_list_null" selected>Chose an client</option>
                                            <?php client_pull() ?>
                                        </select>
                                    </div>

                                </div>

                                <div class="ocms-container--flex">

                                    <div class="ocms-cell--25pc">
                                        <p>Initial Use</p>
                                    </div>

                                    <div class="ocms-cell--80pc ocms-container--padded">
                                        <input type="date" name="add_use_date" class="ocms-form--text-input" placeholder="Hardware User" />
                                    </div>

                                </div>

                                <div class="ocms-container--flex">

                                    <input type="submit" class="ocms-form--submit" value="Add license" />   

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </main>

<?php require('../scripts/footer.php'); ?>