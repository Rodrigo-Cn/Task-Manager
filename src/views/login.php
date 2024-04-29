<?php   
    session_start();
    require_once(dirname(__FILE__, 2)."/src/config/config.php");
    require_once(realpath(CONTROLLER_PATH."login.php"));





?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <style>
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        form input{
            width: 30%;
        }
        form button{
            margin-top: 2%;
            width: 15%;
        }
        h1{
            text-align: center;
            margin-bottom: 5%;
        }
    </style>

    <h1>Login</h1>
    <form action="" method="POST" name="usuario">
        <label for="usuario">Email:</label>
        <input type="email" name="usuario" value="<?= $email ?>">
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <button>Entrar</button>
        <a href="cadastrar.php" style="color: blue;">Cadastrar</a>
    </form>
</body>
</html>
