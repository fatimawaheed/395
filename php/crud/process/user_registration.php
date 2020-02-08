<?php

function dd($arg)
{
    echo "<pre>";
    print_r($arg);
    die;
}

require_once "../classes/Users.php";

$errors = array();
$user = new User;
// dd($_POST['password']);
// dd(sha1('admin'));

try {
    $user->first_name = $_POST['first_name'];
} catch (Exception $e) {
    $errors['first_name']  = $e->getMessage();
}
try {
    $user->last_name = $_POST['last_name'];
} catch (Exception $e) {
    $errors['last_name']  = $e->getMessage();
}
try {
    $user->email = $_POST['email'];
} catch (Exception $e) {
    $errors['email']  = $e->getMessage();
}
try {
    $user->password = $_POST['password'];
} catch (Exception $e) {
    $errors['password']  = $e->getMessage();
}

// Retype password


if($_POST['password'] != $_POST['retype_password']){
    $errors['password'] = "Password not matched";
}
try {
    $user->profile_image = $_POST['profile_image'];
} catch (Exception $e) {
    $errors['profile_image']  = $e->getMessage();
}

dd($errors);
$user->first_name = $_POST['first_name'];
dd($_POST);
