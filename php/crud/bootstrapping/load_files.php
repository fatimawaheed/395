<?php

function dd($arg)
{
    echo "<pre>";
    print_r($arg);
    die;
}
// echo "<pre>";
// print_r($_SERVER);
// die;

$application_path = "/evs/evs395/php/crud/";
$baseurl = "http://" .$_SERVER['HTTP_HOST'] .$application_path;
// die(__FILE__);
define('BASE_URL', $baseurl);

require_once "helpers.php";