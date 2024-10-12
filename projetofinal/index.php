<?php
session_start();
ini_set("display_errors",0);
$nome = $_SESSION['id'];
if($nome == null){
	die("Usuário não autenticado!
	<a href='loginusuario.html'>Logar</a>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div>
        <img src="imagens/logolojinhadaje1.png" width="130px"><br>
        <form action="listar_prod.php">
            <input type="submit" value="Produtos">
        </form> 
        <form action="listar_cli.php">
            <input type="submit" value="Clientes">
        </form>
        <form action="logoff.php">
            <input type="submit" value="Sair">
        </form>
    </div>
</body>
</html>