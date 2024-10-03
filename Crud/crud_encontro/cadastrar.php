<?php

//conectar ao banco de dados.
include("conecta.php");

//receber os dados do formulário.
$email = $_GET['email'];
$senha = $_GET['senha'];


//comando sql.
$sql = "INSERT INTO usuario (email, senha) VALUES ('$email', '$senha')";

header("location: listar.php");

//executar o comando sql.
mysqli_query($conexao, $sql);

?>