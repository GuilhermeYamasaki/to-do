<?php

session_start();

$id = $_POST["id"];

$_SESSION["toDo"][$id] = $_POST["newText"]; 

header ("Location: home.php");
exit;