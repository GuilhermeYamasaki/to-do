<?php
    session_start();

    if (empty($_SESSION["users"])) {
        $_SESSION["users"] = [];
    }

    $_SESSION["users"][] = [
        "email" => $_POST["email"], 
        "password" => $_POST["password"]
    ];

    header("Location: index.php");
    exit;


    