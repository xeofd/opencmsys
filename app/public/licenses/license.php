<?php
require('../scripts/header.php'); 
require('../scripts/data_select.php');

$link_code = $_GET['i'];

if($link_code == null){
    header('Location: /licenses');
}else{
    license_select($link_code);

    if ($display['download_link'] == null){
        $download_link = "No download link";
    }else{
        $download_link = $display['download_link'];
    }
}
?>

            <!-- Begin body content -->

            <main class="ocms-container" id="ocms_container_content">

                <div class="ocms-container--flex">

                    <div class="ocms-content--block ocms-cell-breaker ocms-cell--70pc">
                        
                        <div class="ocms-content--title">

                            <h2>License info for <?php echo($display['software']); ?></h2>

                        </div>

                        <div class="ocms-cell--text">

                            <div class="ocms-container--flex ocms-container--padded">

                                <div class="ocms-cell--50pc">
                                
                                    <div class="ocms-content--information">
                                        <p>Software: <?php echo($display['software']) ?></p>
                                    </div>

                                    <div class="ocms-content--information">
                                        <p>Client: <?php echo($display['company_name']);?></p>
                                    </div>

                                    <div class="ocms-content--information">
                                        <p>User: <?php echo($display['user']) ?></p>
                                    </div>

                                    <div class="ocms-content--information">
                                        <p>Last used on: <?php echo($display['use_date']) ?></p>
                                    </div>

                                </div>

                                <div class="ocms-cell--50pc">
                                
                                    <div class="ocms-content--information">
                                        <p>License key </p>
                                        <p><?php echo($display['license_key']) ?></p>
                                    </div>

                                    <div class="ocms-content--information">
                                        <p>Software download: <a href="<?php echo($download_link); ?>"><?php echo($download_link); ?></a></p>
                                    </div>
                                
                                </div>
                            
                            </div>

                        </div>

                    </div>

                    <div class="ocms-content--block ocms-cell ocms-cell--30pc">

                        <div class="ocms-content--title">

                            <h2>Edit info</h2>

                        </div>

                        <div class="ocms-cell--max-width">

                            <form action="edit.php?i=<?php echo($link_code) ?>" method="POST" name="form_add_license" class="ocms-form">

                                <div class="ocms-container--flex ocms-container--padded">

                                    <div class="ocms-cell--25pc">
                                        <p>Last used</p>
                                    </div>

                                    <div class="ocms-cell--80pc">
                                        <input type="date" name="edit_use_date" class="ocms-form--text-input" />
                                    </div>   

                                </div>

                                <div class="ocms-container--flex ocms-container--padded">

                                    <div class="ocms-cell--25pc">
                                        <p>Add DL link</p>
                                    </div>

                                    <div class="ocms-cell--80pc">
                                        <input type="text" name="edit_download_link" class="ocms-form--text-input" placeholder="Download link" />
                                    </div>  

                                </div>

                                <div class="ocms-container--form">

                                    <input type="submit" class="ocms-form--submit" value="Update license" />   

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </main>

<?php require('../scripts/footer.php'); ?>