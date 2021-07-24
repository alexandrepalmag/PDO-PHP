<?php

use app\models\User;

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$user = new User;

$registered = $user->insert([

    'name' => $name,
    'email' => $email,
    'password' => $password,

]);

if($registered){
    header('location:/');
}
