<?php

// This is the code for creating new files for each item in both the hardware and and software files.

// Generate random links
function create_link(){
    #Generate the alphanumeric id for hardware items
    global $link_code;
    #Set the charset to be used to generate code
    $charset = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $link_code = substr(str_shuffle($charset), 0, 16);
}

?>