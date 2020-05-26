<?php 

$homepage = false;

require('../scripts/header.php');
require('../scripts/data_pull.php');

?>

                <div class="ocms-container--status" id="status_container">

                    <script src="../js/core.js"></script>

                </div>

                <div class="ocms-container--flex" id="main_inner">
                
                    <div class="ocms-content--block ocms-cell-breaker ocms-cell--70pc">
                        
                        <div class="ocms-content--title">

                            <h2>Client hardware list</h2>

                        </div>

                        <div>

                            <table class="ocms-content--table">
                                <thead>
                                    <tr>
                                        <th class="ocms-table--data-head">Hardware</th>
                                        <th class="ocms-table--data-head">Client</th>
                                        <th class="ocms-table--data-head">User</th>
                                        <th class="ocms-table--data-head">Issue</th>
                                        <th class="ocms-table--data-head">Last Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php hardware_pull(); ?>
                                </tbody>
                            </table>

                        </div>

                    </div>

                    <div class="ocms-content--block ocms-cell--30pc">

                        <div class="ocms-content--title">

                            <h2>Add hardware</h2>

                        </div>

                        <div>

                            <form action="add.php" method="POST" name="form_add_hardware" class="ocms-form">

                                <div class="ocms-container--flex">

                                    <div class="ocms-cell--25pc">
                                        <p>Hardware Make</p>
                                    </div>

                                    <div class="ocms-cell--80pc ocms-container--padded">
                                        <input type="text" name="add_hardware_make" class="ocms-form--text-input" placeholder="Make" />
                                    </div>

                                </div>

                                <div class="ocms-container--flex">

                                    <div class="ocms-cell--25pc">
                                        <p>Hardware Model</p>
                                    </div>

                                    <div class="ocms-cell--80pc ocms-container--padded">
                                        <input type="text" name="add_hardware_model" class="ocms-form--text-input" placeholder="Model" />
                                    </div>

                                </div>

                                <div class="ocms-container--flex">

                                    <div class="ocms-cell--25pc">
                                        <p>Hardware Issue</p>
                                    </div>

                                    <div class="ocms-cell--80pc ocms-container--padded">
                                        <textarea name="add_hardware_issue" class="ocms-form--text-area" placeholder="Describe issue here" maxlength="1024"></textarea>
                                    </div>

                                </div>

                                <div class="ocms-container--flex">

                                    <div class="ocms-cell--25pc">
                                        <p>Hardware User</p>
                                    </div>

                                    <div class="ocms-cell--80pc ocms-container--padded">
                                        <input type="text" name="add_hardware_user" class="ocms-form--text-input" placeholder="User" /> 
                                    </div>  

                                </div>

                                <div class="ocms-container--flex">

                                    <div class="ocms-cell--25pc">
                                        <p>Hardware User</p>
                                    </div>

                                    <div class="ocms-cell--80pc ocms-container--padded">
                                        <select class="ocms-form--select" name="add_hardware_company">
                                            <option id="option_list_null" selected>Chose an client</option>
                                            <?php client_pull(); ?>
                                        </select>
                                    </div>

                                </div>

                                <div class="ocms-container--flex">

                                    <div class="ocms-cell--25pc">
                                        <p>Initial Contact</p>
                                    </div>

                                    <div class="ocms-cell--80pc ocms-container--padded">
                                        <input type="date" name="add_hardware_initial_contact" class="ocms-form--text-input" />
                                    </div>  

                                </div>


                                <div class="ocms-container--flex">

                                    <div class="ocms-cell--25pc">
                                        <p>Collection Date</p>
                                    </div>

                                    <div class="ocms-cell--80pc ocms-container--padded">
                                        <input type="date" name="add_hardware_collection" class="ocms-form--text-input" />
                                    </div>  

                                </div>


                                <div class="ocms-container--flex">

                                    <input type="submit" class="ocms-form--submit" value="Add hardware" />   

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </main>

<?php require('../scripts/footer.php'); ?>