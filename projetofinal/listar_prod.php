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
$sql = "SELECT * FROM produto";
$executar = mysqli_query($conexao, $sql);
echo "
<head>
    <link rel='stylesheet' href='index.css'>
</head>
<table border=1>
<tr>
<td>Codigo</td>
<td>Descrição</td>
<td>Quantidade</td>
<td>Preço</td>
<td>Excluir</td>
<td>Alterar</td>
</tr>
";
while($resultado = mysqli_fetch_array($executar)){
    $codigo = $resultado['codigo'];
    $descricao = $resultado['descricao'];
    $quantidade = $resultado['quantidade'];
    $preco = $resultado['preco'];
    echo "<tr><td>$codigo</td><td>$descricao</td><td>$quantidade</td>
    <td>$preco</td><td><a href='exc_prod.php?codigo=$codigo'>Excluir</a></td>
    <td><a href='upd_prod.php?codigo=$codigo'>Alterar</a></td></tr>";
    
}
echo "</table>";

$fechar = mysqli_close($conexao);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div>
        <form action="cadprod.php">
            <input type="submit" value="Cadastrar Produtos">
        </form>
        <form action="index.php">
            <input type="submit" value="Página Inicial">
        </form>
    </div>
</body>
</html>  