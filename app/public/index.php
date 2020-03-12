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

                    <div class="stack-cell stack-cell--5">
                        
                        <div class="stack-cell--title">

                            <h2>Client Hardware list</h2>

                        </div>

                        <div class="stack-cell--content-table">

                            <table class="stack-table">
                                <thead>
                                    <tr>
                                        <th class="stack-table--data-head">Hardware</th>
                                        <th class="stack-table--data-head">Client</th>
                                        <th class="stack-table--data-head">User</th>
                                        <th class="stack-table--data-head">Issue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="stack-table--data-row">
                                        <td class="stack-table--data" name="component_list_hardware">HP Probook</td>
                                        <td class="stack-table--data" name="component_list_client">Glacier</td>
                                        <td class="stack-table--data" name="component_list_user">Jane Doe</td>
                                        <td class="stack-table--data" name="component_list_issue">Screen flashing on and off</td>
                                        <td class="stack-table--data" name="component_list_link"><a href="#" class="stack-table--link">More info</a></td>
                                    </tr>
                                    <tr class="stack-table--data-row">
                                        <td class="stack-table--data">HP Probook</td>
                                        <td class="stack-table--data">Glacier</td>
                                        <td class="stack-table--data">Jane Doe</td>
                                        <td class="stack-table--data">Screen flashing on and off</td>
                                        <td class="stack-table--data"><a href="#" class="stack-table--link">More info</a></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>

                    <div class="stack-cell stack-cell--5">

                        <div class="stack-cell--title">

                            <h2>Client software list</h2>

                        </div>

                        <div class="stack-cell--content-table">

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
                                    <?php 
                                    
                                    require("scripts/licenses_pull.php");

                                    ?>
                                </tbody>
                            </table>
                            
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