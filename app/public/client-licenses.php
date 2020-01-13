<!DOCTYPE html>
<html>

    <head>

    <?php require('scripts/tags.php'); ?>
    
    </head>

    <body>

        <!-- Begin stack-design layout -->

        <div class="stack-full-container">

        <?php
        
        require('scripts/header.php');

        ?>

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
                                        <th class="stack-table--data-head">OriginalUser</th>
                                        <th class="stack-table--data-head">Recent User</th>
                                        <th class="stack-table--data-head">First Use</th>
                                        <th class="stack-table--data-head">Last Use</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="stack-table--data-row">
                                        <td class="stack-table--data" name="license_list_software">Microsoft Office 2010</td>
                                        <td class="stack-table--data" name="license_list_client">Glacier</td>
                                        <td class="stack-table--data" name="license_list_user">Jane Doe</td>
                                        <td class="stack-table--data" name="license_list_user">John Doe</td>
                                        <td class="stack-table--data" name="license_list_issue">12/12/19</td>
                                        <td class="stack-table--data" name="license_list_date">03/01/20</td>
                                        <td class="stack-table--data" name="license_list_link"><a href="#" class="stack-table--link">More info</a></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>

                    <div class="stack-cell stack-cell--4">

                        <div class="stack-cell--title">

                            <h2>Add license</h2>

                        </div>

                        <div class="stack-cell--max-width">

                            <form action="/add-license.php" method="POST" name="form_add_hardware" class="stack-form">

                                <div class="stack-container--form">

                                    <p>Software</p>
                                    <input type="text" name="add_license_software" class="stack-form--text-input" placeholder="Software" />

                                </div>

                                <div class="stack-container--form">

                                    <p>Original User</p>
                                    <input type="text" name="add_license_original_user" class="stack-form--text-input" placeholder="Original user" />

                                </div>

                                <div class="stack-container--form">

                                    <p>License Key</p>
                                    <textarea name="add_license_key" class="stack-form--text-area" placeholder="Add license key" maxlength="1024"></textarea>

                                </div>

                                <div class="stack-container--form">

                                    <p>Client</p>
                                    <select class="stack-form--select">
                                        <option id="option_list_null">Chose an client</option>
                                        <option name="add_hardware_company">Glacier Energy Services</option>
                                        <option name="add_hardware_company">Palmers Scafolding</option>
                                        <option name="add_hardware_company">The Normandy Hotel</option>
                                    </select> 

                                </div>

                                <div class="stack-container--form">

                                    <p>Initial Use</p>
                                    <input type="date" name="add_license_initial_use" class="stack-form--text-input" placeholder="Hardware User" />   

                                </div>

                                <div class="stack-container--form">

                                    <input type="submit" class="stack-form--submit" value="Add license" />   

                                </div>

                            </form>

                        </div>

                    </div>

                </main>

            </div>

            <?php 
            
                require('scripts/footer.php');

            ?>

        </div>

    </body>

</html>