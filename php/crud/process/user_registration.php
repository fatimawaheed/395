<?php 

function dd($arg)
{
    echo "<pre>";
    print_r($arg);
    die;
}

require_once "../classes/Users.php";


$user = new User;

// try{

// }catch(Exception $e){

// }

$user->first_name = $_POST['first_name'];
dd($_POST);
