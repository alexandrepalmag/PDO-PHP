<?php

use app\classes\Validation;
use app\models\User;

/* $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING); */

$validation = new Validation;
$validate= $validation->validate($_POST);

$user = new User;

$registered = $user->insert($validate);
/* [

     'name' => $name,
    'email' => $email,
    'password' => $password,

] */

if ($registered) {

    header('location:/');
}
