<?php

session_start();
include_once("../conecta.php");

if ($_POST) {
    
    var_dump($_POST);

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //verificar se o email existe no banco de dados.
    $sql = "SELECT * FROM usuario WHERE email = $email";

    //excutar o comando $sql_busca.
    $execucao = mysqli_query($conexao, $sql);

    //ter o array associativo com os valores vindos do banco de dados.
    $ValorAssociativo = mysqli_fetch_assoc($execucao);

    var_dump($ValorAssociativoalor);

   
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>

    <form action="" method="post">
        <input type="email" name="email" id="">
        <input type="password" name="senha" id="">
        <input type="submit" value = "Login">
    </form>
    
    <br>
    <h2>Não tem um cadastro ? Crie um </h2>
    <a href="cadastrar.php"> Cadastre-se</a>
</body>

</html>
