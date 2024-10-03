<?php

// Recebe o id do usuário


// Conectar ao BD
include("conecta.php");


// Seleciona os dados do usuário da tabela
$sql = "SELECT * FROM usuario";

// Executa o Select
$resultado = mysqli_query($conexao,$sql);

// Gera o vetor com os dados buscados
$dados = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cadastro</title>
    
</head>
<body>

<form action="alterar.php" method="get">

    <h2>Editar cadastro</h2>
    <input type="hidden" name="id_usuario" value="<?php echo $dados['id_usuario'];?>">
    Edite seu email
    <input  type="text" value="<?php echo $dados['email'];?>" name="email"/><br><br>
    Edite sua senha
    <input type="password" value="<?php echo $dados['senha'];?>" name="senha" id="senha"/><br><br>
       

    <input type="submit" value="Editar"/>

    <p> <button href="index.php">Voltar</button>

</form>
    
</body>
</html>