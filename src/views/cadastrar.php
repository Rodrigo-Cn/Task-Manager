<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <h1>Cadastrar</h1>
    <form action="" method="POST" name="usuario">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
        <br>
        <label for="usuario">Email:</label>
        <input type="email" name="usuario">
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <label for="idade">Idade:</label>
        <input type="number" name="idade">
        <br>
        <button>Entrar</button>
        <div style="color: red;"><?php echo isset($erro) ? $erro : ''; ?></div>
    </form>
</body>
</html>