<?php


function dd($arg){
    echo '<pre>';
    print_r($arg);
    die;
    // exit;
}


dd($_SERVER);
