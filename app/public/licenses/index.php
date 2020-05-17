<?php require('../scripts/header.php'); ?>

            <!-- Begin body content -->

            <div class="stack-spacer-vertical"></div>

            <div class="stack-container">

                <main class="stack-container" id="stack_container_content">

                    <div class="stack-cell stack-cell--6">
                        
                        <div class="stack-cell--title">

                            <h2>Client license list</h2>

                        </div>

                        <div class="stack-cell--max-width">

                            <table class="stack-table">
                                <thead>
                                    <tr>
                                        <th class="stack-table--data-head">Software</th>
                                        <th class="stack-table--data-head">Client</th>
                                        <th class="stack-table--data-head">User</th>
                                        <th class="stack-table--data-head">Used on</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $homepage = false; require("../scripts/licenses_pull.php"); ?>
                                </tbody>
                            </table>

                        </div>

                    </div>

                    <div class="stack-cell stack-cell--4">

                        <div class="stack-cell--title">

                            <h2>Add license</h2>

                        </div>

                        <div class="stack-cell--max-width">

                            <form action="add.php" method="POST" name="form_add_license" class="stack-form">

                                <div class="stack-container--form">

                                    <p>Software</p>
                                    <input type="text" name="add_license_software" class="stack-form--text-input" placeholder="Software" />

                                </div>

                                <div class="stack-container--form">

                                    <p>Original User</p>
                                    <input type="text" name="add_license_user" class="stack-form--text-input" placeholder="Original user" />

                                </div>

                                <div class="stack-container--form">

                                    <p>License Key</p>
                                    <textarea name="add_license_key" class="stack-form--text-area" placeholder="Add license key" maxlength="1024"></textarea>

                                </div>

                                <div class="stack-container--form">

                                    <p>Client</p>
                                    <select class="stack-form--select">
                                        <option id="option_list_null">Chose an client</option>
                                        <?php require('../scripts/client_pull.php'); ?>
                                    </select> 

                                </div>

                                <div class="stack-container--form">

                                    <p>Initial Use</p>
                                    <input type="date" name="add_license_use_date" class="stack-form--text-input" placeholder="Hardware User" />   

                                </div>

                                <div class="stack-container--form">

                                    <input type="submit" class="stack-form--submit" value="Add license" />   

                                </div>

                            </form>

                        </div>

                    </div>

                </main>

            </div>

<?php require('../scripts/footer.php'); ?>