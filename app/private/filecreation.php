<?php

// This is the code for creating new files for each item in both the hardware and and software files.

// Generate random links
function create_hardware_link(){
    #Generate the alphanumeric id for hardware items
    global $hardware_link_code;
    #Set the charset to be used to generate code
    $charset = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $hardware_link_code = "hardware-".substr(str_shuffle($charset), 0, 16).".php";
}
function create_license_link(){
    #Generate the alphanumeric id for hardware items
    global $license_link_code;
    #Set the charset to be used to generate code
    $charset = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $license_link_code = "license-".substr(str_shuffle($charset), 0, 16).".php";
}

// Generate files

function create_hardware_page($hardware_link_code){
    $new_hardware_page = fopen('hardware/'.$hardware_link_code, "w");
}
function create_license_page($license_link_code){
    $license_page = <<<EOL

            <?php require('../scripts/header.php');  require('../scripts/license_select.php'); ?>
            <!-- Begin body content -->
            <div class="stack-spacer-vertical"></div>
            <div class="stack-container">
            <main class="stack-container" id="stack_container_content">
            <div class="stack-cell stack-cell--6">
            <div class="stack-cell--title">
            <h2>License info for <?php pull_data(${license_link_code}); echo(${display['client_license_software']}) ?></h2>
            </div>
            <div class="stack-cell--max-width">
            <div class="stack-container--flex">
            <div class="stack-cell--5">
            <div class="stack-information--block">
            <p><span class="stack-text--important">Software: </span> </p>
            </div>
            <div class="stack-information--block">
            <p><span class="stack-text--important">Client: </span> </p>
            </div>
            </div>
            <div class="stack-cell--5">
            <div class="stack-information--long-form">
            <p><span class="stack-text--important">License key</span> </p>
            <p>blah-blah-blah-blah</p>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="stack-cell stack-cell--4">
            <div class="stack-cell--title">
            <h2>Edit info</h2>
            </div>
            <div class="stack-cell--max-width">
            <form action="add-license.php" method="POST" name="form_add_license" class="stack-form">
            <div class="stack-container--form">
            <p>Last used</p>
            <input type="date" name="add_license_use_date" class="stack-form--text-input" placeholder="Hardware User" />   
            </div>
            <div class="stack-container--form">
            <input type="submit" class="stack-form--submit" value="Update license" />   
            </div>
            </form>
            </div>
            </div>
            </main>
            </div>
            <?php require('../scripts/footer.php'); ?>
EOL;
    $new_license_page = fopen('licenses/'.$license_link_code, "w");
    $page_code = $license_page;
    fwrite($new_license_page, $page_code);
    fclose($new_license_page);
}

?>