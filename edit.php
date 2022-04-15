<?php
session_start();
$id = $_POST["edit"];
$newText = $_SESSION["toDo"][$id];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar o texto</title>
</head>
<body>
    <h1>Alterar objeto</h1>
    <form action="update-item.php" method = "POST">
        <!-- <input type="hidden" name="_method" value="PUT"> -->
        <input type="hidden" name ="id" id = "id" value = "<?= $id ?>"> <!-- key -->
        <input type="text" name = "newText" value = "<?= $newText ?>"> 
        <button>Editar item</button>
    </form>
</body>
</html>

