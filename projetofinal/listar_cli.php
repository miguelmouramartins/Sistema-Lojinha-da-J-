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
$conexao = mysqli_connect('localhost','root','','projetofinal');
$sql = "SELECT * FROM cliente";
$executar = mysqli_query($conexao, $sql);
echo "
<head>
    <link rel='stylesheet' href='index.css'>
</head>
<table border=1>
<tr>
<td>Codigo</td>
<td>Nome Completo</td>
<td>CPF</td>
<td>Nascimento</td>
<td>Telefone</td>
<td>Excluir</td>
<td>Alterar</td>
</tr>
";
while($resultado = mysqli_fetch_array($executar)){
    $codigo = $resultado['idcliente'];
    $nome = $resultado['nome_completo'];
    $cpf = $resultado['cpf'];
    $datanasc = $resultado['datanasc'];
    $telefone = $resultado['telefone'];
    echo "<tr><td>$codigo</td><td>$nome</td><td>$cpf</td><td>$datanasc</td>
    <td>$telefone</td><td><a href='exc_cli.php?codigo=$codigo'>Excluir</a></td>
    <td><a href='upd_cli.php?codigo=$codigo'>Alterar</a></td></tr>";
    
}
echo "</table>";

$fechar = mysqli_close($conexao);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div>
        <form action="cad_cli.php">
            <input type="submit" value="Cadastrar Clientes">
        </form>
    </div>
</body>
</html>  