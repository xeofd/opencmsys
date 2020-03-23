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
    require_once('../scripts/license-page.php');
    $new_license_page = fopen('licenses/'.$license_link_code, "w");
    $page_code = $license_page;
    fwrite($new_license_page, $page_code);
    fclose($new_license_page);
}

?>