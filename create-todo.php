<?php
session_start();
if(empty($_SESSION ["toDo"])){
    $_SESSION["toDo"] = [];
}


$_SESSION["toDo"] [] = $_POST["items"];

header ("Location: home.php");
exit;