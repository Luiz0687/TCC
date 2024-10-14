<?php
session_start();
if(!isset($_SESSION) or $_SESSION['usuario_tipo'] == 2 or $_SESSION['usuario_tipo'] == 3){
   echo " <script>alert('Você não está logado no sistema!');
   window.location.href=window.location.origin +'/TCC/index.php';
   </script>";
     die;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inicio</h1>
    <a href="sair.php">Sair</a>
</body>
</html>