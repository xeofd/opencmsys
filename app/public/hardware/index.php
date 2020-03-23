<?php require('../scripts/header.php'); ?>

            <!-- Begin body content -->

            <div class="stack-spacer-vertical"></div>

            <div class="stack-container">

                <main class="stack-container" id="stack_container_content">

                    <div class="stack-cell stack-cell--6">
                        
                        <div class="stack-cell--title">

                            <h2>Client hardware list</h2>

                        </div>

                        <div class="stack-cell--max-width">

                            <table class="stack-table">
                                <thead>
                                    <tr>
                                        <th class="stack-table--data-head">Hardware</th>
                                        <th class="stack-table--data-head">Client</th>
                                        <th class="stack-table--data-head">User</th>
                                        <th class="stack-table--data-head">Issue</th>
                                        <th class="stack-table--data-head">Last Update</th>
                                        <th class="stack-table--data-head">Complete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $homepage = false;
                                    require('../scripts/hardware_pull.php'); 
                                    ?>
                                </tbody>
                            </table>

                        </div>

                    </div>

                    <div class="stack-cell stack-cell--4">

                        <div class="stack-cell--title">

                            <h2>Add hardware</h2>

                        </div>

                        <div class="stack-cell--max-width">

                            <form action="add-hardware.php" method="POST" name="form_add_hardware" class="stack-form">

                                <div class="stack-container--form">

                                    <p>Hardware Make</p>
                                    <input type="text" name="add_hardware_make" class="stack-form--text-input" placeholder="Hardware Make" />

                                </div>

                                <div class="stack-container--form">

                                    <p>Hardware Model</p>
                                    <input type="text" name="add_hardware_model" class="stack-form--text-input" placeholder="Hardware Model" />

                                </div>

                                <div class="stack-container--form">

                                    <p>Hardware Issue <span class="stack-form--char-count"><span id="stack_character_count">1024</span>/1024</span></p>
                                    <textarea name="add_hardware_issue" class="stack-form--text-area" placeholder="Describe issue here" maxlength="1024"></textarea>

                                </div>

                                <div class="stack-container--form">

                                    <p>Hardware User</p>
                                    <input type="text" name="add_hardware_user" class="stack-form--text-input" placeholder="Hardware User" />   

                                </div>

                                <div class="stack-container--form">

                                    <p>Client</p>
                                    <select class="stack-form--select">
                                        <option id="option_list_null">Chose an client</option>
                                        <?php require('../scripts/client_pull.php'); ?>
                                    </select> 

                                </div>

                                <div class="stack-container--form">

                                    <p>Initial Contact</p>
                                    <input type="date" name="add_hardware_initial_contact" class="stack-form--text-input" placeholder="Hardware User" />   

                                </div>


                                <div class="stack-container--form">

                                    <p>Collection Date</p>
                                    <input type="date" name="add_hardware_collection" class="stack-form--text-input" placeholder="Hardware User" />   

                                </div>


                                <div class="stack-container--form">

                                    <input type="submit" class="stack-form--submit" value="Add hardware" />   

                                </div>

                            </form>

                        </div>

                    </div>

                </main>

            </div>

<?php require('../scripts/footer.php'); ?>