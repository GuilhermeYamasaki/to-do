<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome to your to-do list</h1>
    <form action="create-todo.php" method = "POST">
        <input type="text" placeholder="Adicione um item" name = "items" id = "items">
        <button>Enviar item </button>
    </form>
    <ul>
        <?php foreach ($_SESSION["toDo"] as $key => $items) { ?>
            <li>
                <?= $items ?>
                <form action="edit.php" method = "POST">
                    <input type="hidden" name = "edit" id = "edit" value = "<?= $key ?>"> 
                    <button>Editar</button>
                </form> 
                <form action="delete.php" method ="POST">
                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                    <input type="hidden" name = "delete" id = "delete" value = "<?= $key ?>">
                    <button>Excluir</button>
                </form>
            </li>
        <?php } ?>
    </ul>
</body>
</html>