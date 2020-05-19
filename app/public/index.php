<?php require('scripts/header.php'); ?>

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
                                    <?php 

                                        $homepage = true;
                                        require("scripts/hardware_pull.php");
                                    
                                    ?>
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

                                    $homepage = true;
                                    require("scripts/licenses_pull.php");

                                ?>
                                </tbody>
                            </table>
                            
                        </div>

                    </div>

                </main>

            </div>

<?php require('scripts/footer.php'); ?>