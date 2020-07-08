<?php

require('./scripts/header.php');
require('./scripts/data_pull.php');

?>


        <!-- START BODY -->

        <main id="bloc_app_main">

            <div class="bloc-container bloc-container--large" id="bloc_app_alert"></div>

            <div class="bloc-container bloc-container--large" id="bloc_app_content">

                <div class="bloc-container--flex" id="bloc_app_status_bar">

                    <div class="bloc-cell--50pc bloc-content--status-bar bloc-cell--breaker" id="bloc_app_status_bar__hardware">

                        <p>Open hardware jobs: </p>
    
                    </div>

                    <div class="bloc-cell--50pc bloc-content--status-bar" id="bloc_app_status_bar__licenses">

                        <p>Total license count: </p>
    
                    </div>

                </div>

                <div class="bloc-container--flex" id="bloc_app_lists">

                    <div class="bloc-content--block bloc-cell--50pc bloc-cell--breaker">

                        <div class="bloc-content--title">
                            <h2>Hardware</h2>
                        </div>

                        <div>

                            <table class="bloc-table" id="bloc_app_table__hardware">

                                <thead>
                                    <tr>
                                        <td class="bloc-table--data-head">Hardware</td>
                                        <td class="bloc-table--data-head">Client</td>
                                        <td class="bloc-table--data-head">Status</td>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php 
                                    
                                        hardware_pull();
                                    
                                    ?>
                                </tbody>

                            </table>

                        </div>

                    </div>
    
                    <div class="bloc-content--block bloc-cell--50pc">

                        <div class="bloc-content--title">
                            <h2>Licenses</h2>
                        </div>

                        <div>

                            <table class="bloc-table" id="bloc_app_table__hardware">

                                <thead>
                                    <tr>
                                        <th class="bloc-table--data-head">Software</th>
                                        <th class="bloc-table--data-head">Client</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="bloc-table--row">
                                        <td class="bloc-table--data">Office 2016</td>
                                        <td class="bloc-table--data">Glacier</td>
                                        <td class="bloc-table--data"><a href="hardware/hardware.php?i=" class="bloc-table--link">More info</a></td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>
    
                    </div>

                </div>

            </div>

        </main>

        <!-- END BODY -->

        <?php 
        
            require('./scripts/footer.php');
        
        ?>
        
    </body>

</html>