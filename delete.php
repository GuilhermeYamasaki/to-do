<?php
session_start();
$keyDestroy = $_POST["delete"];

unset($_SESSION["toDo"][$keyDestroy]);

header ("Location: home.php");
exit;