<?php
session_start();

$credenciais = [
    "email" => $_POST["emailLogin"],
    "password" => $_POST["passwordLogin"]
];

$userData = null;


foreach ($_SESSION['users'] as $user) {
    if ($user['email'] == $credenciais['email'] && $user['password'] == $credenciais['password']) {
        $userData = $user; 
        break;
    }
}



if(empty($userData)) {
    header ("Location: index.php");
    exit;
}

header ("Location: home.php");
