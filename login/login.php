<?php

$enteredUserName =  $_POST['username'];
$enteredPassword  = $_POST['password'];

//session_start();
//$_SESSION[];


$stored = ['password' => password_hash('Password123', PASSWORD_DEFAULT), "username" => 'abdi'];

$verified = password_verify($enteredPassword, $stored['password']);

echo $verified;

if ($enteredUserName === $stored['username'] && $verified === true){
    echo 'your logged in ' . $enteredUserName;
} else {
    echo 'GTFO!!!';
//    header( 'index.php');
}

