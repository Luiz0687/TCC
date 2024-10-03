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
        Email :<input type="email" name="email" id="email" required><br><br>
        Senha :<input type="password" name="senha" id="senha" required><br><br>
        <input type="submit" value="Login">
    </form><br>
    <h2>Não tem um cadastro ? Crie um </h2>
    <a href="cadastrar.php"> Cadastre-se</a>
</body>

</html>
<?php
require_once "../conecta.php";
session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];

 $sql1 = "SELECT * FROM usuario WHERE email = '$email'";
 $msqli = mysqli_query ($conexao,$sql);

 if(){
    
 } 



?>