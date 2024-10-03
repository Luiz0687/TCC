<?php

// Conectar ao BD
include("conecta.php");

// receber os dados do formulário
$id_usuario = $_GET['id_usuario'];
$email = $_GET['email'];
$senha = $_GET['senha'];


$sql = "UPDATE usuario SET 
email = '$email', senha = '$senha' WHERE id_usuario = $id_usuario";
mysqli_query($conexao,$sql);

if ($conexao->error) {

    die("Falha ao editar usuário no sistema:". $conexao->error);

}else {
    header("location: listar.php");
}
// executa o comando no BD

?>