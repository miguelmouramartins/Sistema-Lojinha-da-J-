<?php
session_start();
ini_set("display_errors",0);
$nome = $_SESSION['id'];
if($nome == null){
	die("Usuário não autenticado!
	<a href='login.html'>Logar</a>");
}
?>
<?php
$codigo = $_GET['codigo'];
$conexao = mysqli_connect('localhost','root','','projetofinal');
$sql = "SELECT * FROM cliente WHERE idcliente=$codigo";
$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);
$fechar = mysqli_close($conexao);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginusuario.css">
    <title>Atualizar</title>
</head>
<body>
    <div>
    <form action="atualizar_cli.php" method="POST">
    <img src="imagens/logolojinhadaje1.png" width="130px"><br>
        <h3>Atualizar Cadastro</h3>
        Código <input type="text" name="codigo" readonly
        value="<?php echo $res['idcliente']?>"> <br>
        Nome Completo <input type="text" name="nome"
        value="<?php echo $res['nome_completo'];?>"><br>
        CPF <br>  <input type="text" name="cpf" readonly
        value="<?php echo $res['cpf'];?>"><br>
        Data de Nascimento <input type="text" name="datanasc"
        value="<?php echo $res['datanasc'];?>"><br>
        Telefone  <br><input type="text" name="telefone"
        value="<?php echo $res['telefone'];?>"><br>
        <input type="submit" value="Atualizar">
    </form>
</div> 
</body>
</html>