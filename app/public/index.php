<?php

$homepage = true;

require('scripts/header.php');
require('scripts/data_pull.php');

?>

            <div class="ocms-container--status" id="status_container">

                <script src="../js/core.js"></script>
            
            </div>

            <div class="ocms-container--flex" id="main_inner">

                <div class="ocms-content--block ocms-cell-breaker ocms-cell--50pc">
                
                    <div class="ocms-content--title">
    
                        <h2>Hardware list</h2>
    
                    </div>
    
                    <div>
    
                        <table class="ocms-content--table">
                            <thead>
                                <tr>
                                    <th class="ocms-table--data-head">Hardware</th>
                                    <th class="ocms-table--data-head">Client</th>
                                    <th class="ocms-table--data-head">Issue</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php hardware_pull(); ?>
                            </tbody>
                        </table>
    
                    </div>
    
                </div>
    
                <div class="ocms-content--block ocms-cell--50pc">
    
                    <div class="ocms-content--title">
    
                        <h2>Software list</h2>
    
                    </div>
    
                    <div>
    
                        <table class="ocms-content--table">
                            <thead>
                                <tr>
                                    <th class="ocms-table--data-head">Software</th>
                                    <th class="ocms-table--data-head">Client</th>
                                    <th class="ocms-table--data-head">User</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php license_pull(); ?>
                            </tbody>
                        </table>
    
                    </div>
    
                </div>

            </div>

        </main>

<?php 

require('scripts/footer.php');

?>