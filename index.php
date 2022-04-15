<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>Tela de login</h1>
    <form action="to-login.php" method = "POST">
        <div>
            <label for="email">Email</label>
            <input type = "text" placeholder="Insira seu email" name = "emailLogin" id = "emailLogin" required> 
        </div>
        <div>
            <label for="password">Password</label>
            <input type="text" placeholder="Insira sua senha" name = "passwordLogin" id = "passwordLogin" required>
        </div>
    <button>Logar</button>
    </form>
    
    <h1>Registrar Conta</h1>
    <form action="to-register.php" method = "POST">
        <div>
            <label for="email">Email</label>
            <input type = "text" placeholder="Insira seu email" name = "email" id = "email" required>  
        </div>
        <div>
            <label for="password"> Password </label>
            <input type = "text" placeholder="Insira sua senha nova" name = "password" id = "password" required>  
        </div>
    <button>Registrar</button>
    </form>
</body>
</html>