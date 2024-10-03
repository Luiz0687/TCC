<?php
require_once "../conecta.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de projeto</title>
</head>
<body>
    <form action="cadastrar.php" method="post">
        <input type="text" name="nome" placeholder="informe o nome do projeto" required><br><br>
        <input type="submit" value="cadastrar">
    </form>
</body>
</html>