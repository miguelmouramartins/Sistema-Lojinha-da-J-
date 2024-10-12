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
$conexao = mysqli_connect
('localhost','root','','projetofinal');
$sql = "DELETE FROM cliente WHERE idcliente=$codigo";
$executar = mysqli_query($conexao,$sql);
if($executar == 1){
    echo "Sucesso!";
}
else{
    echo "Erro!";
}
$fechar = mysqli_close($conexao);
?>
