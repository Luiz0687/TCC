<?php

session_start();

$conexao = mysqli_connect('localhost', 'root', '', 'tcc_luiz');

if ($_POST) {

    $email = $_POST['email'];

    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email='$email'";

    $query = mysqli_query($conexao, $sql);

    $usuario = $query->fetch_assoc();
    $_SESSION['nivel'] = $usuario['nivel'];

    
    if ($conexao->error) {

        echo "o erro foi" . $conexao->error;
    } else {
        $quantidade = $query->num_rows;
        if ($quantidade == 0) {
            echo "Email ou senha inválidos ! ";
        } else {
            $usuario = mysqli_fetch_assoc($query);
            $_SESSION['usuario'][0] = $usuario['nome'];
            if (password_verify($senha, $usuario['senha'])) {
                header("location: usuario.php");
            } else {
                echo "Email ou senha inválidos ! ";
            }
        }
    }
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
        Email :<input type="email" name="email" id="email" required><br><br>
        Senha :<input type="password" name="senha" id="senha" required><br><br>
        <input type="submit" value="Login">
    </form><br>
    <h2>Não tem um cadastro ? Crie um </h2>
    <a href="cadastrar.php"> Cadastre-se</a>
</body>

</html>