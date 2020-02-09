<?php

function dd($arg)
{
    echo "<pre>";
    print_r($arg);
    die;
}
function dd1($arg)
{
    echo "<pre>";
    var_dump($arg);
    die;
}

require_once "../classes/Users.php";

$errors = array();
$user = new User;
// dd($_POST['password']);
// dd(sha1('admin'));

try {
    $user->first_name = !empty($_POST['first_name']) ? $_POST['first_name']: '';
} catch (Exception $e) {
    $errors['first_name']  = $e->getMessage();
}
try {
    $user->last_name = !empty($_POST['last_name']) ?  $_POST['last_name'] : '';
} catch (Exception $e) {
    $errors['last_name']  = $e->getMessage();
}
try {
    $user->email = !empty($_POST['email']) ? $_POST['email'] : '';
} catch (Exception $e) {
    $errors['email']  = $e->getMessage();
}
try {
    $user->password = !empty( $_POST['password']) ?  $_POST['password']: '';
} catch (Exception $e) {
    $errors['password']  = $e->getMessage();
}

// Retype password


if($_POST['password'] != $_POST['retype_password']){
    $errors['password'] = "Password not matched";
}


try {
    // dd($_POST);
    $dob = array();
    $dob['day'] = !empty($_POST['day']) ? (int) $_POST['day'] : 0;
    $dob['month'] = $_POST['months'];
    $dob['year'] = !empty($_POST['year']) ? (int) $_POST['year'] : 0;
    $user->dob = $dob;

} catch (Exception $e) {
    $errors['dob']  = $e->getMessage();
}


// $abc = 0;
// echo !empty($abc) ? $abc : 'empty';
// isset
// empty
// die;
try {
    $user->profile_image = !empty($_FILES['profile_image']) ? $_FILES['profile_image'] : '';
} catch (Exception $e) {
    $errors['profile_image']  = $e->getMessage();
}

dd($errors);
$user->first_name = $_POST['first_name'];
dd($_POST);
