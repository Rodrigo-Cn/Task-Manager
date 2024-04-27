<?php
    require("verificarLogin.php");

    $nome = "Visitante";

    if (isset($_SESSION["login"]) && isset($_SESSION["login"]["usuario"])) {
        $nome = $_SESSION["login"]["usuario"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $nome; ?></h1>
</body>
</html>
