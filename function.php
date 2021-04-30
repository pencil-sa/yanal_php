<?php

header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header("Pragma: no-cache"); // HTTP/1.0
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

function getFileName(){
    $current_file_name = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
    $current_file_name = str_replace(".php","",$current_file_name);
    $current_file_name = str_replace("-"," ",$current_file_name);
    return $current_file_name;
}

