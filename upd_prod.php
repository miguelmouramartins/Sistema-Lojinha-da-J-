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
$sql = "SELECT * FROM produto WHERE codigo='$codigo'";
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
    <form action="atualizar_prod.php" method="POST">

        Código <input type="text" name="codigo"
        value="<?php echo $res['codigo'];?>" readonly><br>
        Descrição <input type="text" name="descricao"
        value="<?php echo $res['descricao'];?>"><br>
        Quantidade <input type="text" name="quantidade"
        value="<?php echo $res['quantidade'];?>"><br>
        Preço <br><input type="text" name="preco"
        value="<?php echo $res['preco']; $preco = str_replace(",",".",$preco);?>"><br>
        <input type="submit" value="Atualizar">
    </form>
</div> 
</body>
</html>