<?php
session_start();
$login = $_POST['usuario'];
$senha = $_POST['senha'];
$conexao = mysqli_connect
('localhost','root','','projetofinal');
$sql = "select * from usuario where usuario
 like '$login' and senha like '$senha'";
$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);
if($res['id']!=Null){
    //echo "Logado com sucesso!";
	$_SESSION['id'] = $res['id'];
    header('Location:index.php');
}
else{
    echo "Login e/ou senha incorretos!
	<a href='login.html'>Tentar Novamente</a>";
}
$fechar = mysqli_close($conexao);

?>