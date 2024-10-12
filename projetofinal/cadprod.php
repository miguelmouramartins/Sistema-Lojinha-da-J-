<?php
session_start();
ini_set("display_errors",0);
$nome = $_SESSION['id'];
if($nome == null){
	die("Usuário não autenticado!
	<a href='login.html'>Logar</a>");
}

?>
<!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="loginusuario.css">
                <title>Cadastro de Produtos</title>
            </head>
            <body>
                <div>
                    <form action="cadprod.php" method="post">
                    <img src="imagens/logolojinhadaje1.png" width="130px"><br>
                        Código: <input type="text" name="cod"><br>
                        Descrição: <input type="text" name="descricao"><br>
                        Quantidade: <input type="text" name="quantidade"><br>
                        Preço: <input type="text" name="preco"><br>
                    <input type="submit" value="Cadastrar">
                    </form>
                    <form action="index.php">
                        <input type="submit" value="Início">
                    </form>
                    <form action="listar.php">
                        <input type="submit" value="Produtos">
                    </form>
                </div>
            </body>
        </html>

        <?php
if($_POST){
    $cod = $_POST['cod'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $preco = str_replace(",",".",$preco);

    $conexao = mysqli_connect('localhost', 'root', '', 'projetofinal');
    $comando ="INSERT INTO produto(codigo, descricao, quantidade, preco) values('$cod', '$descricao', '$quantidade', '$preco')";
    $executar = mysqli_query($conexao, $comando);
    if($executar ==1){
        echo "listar.php";
    }else{
        echo "erro";
    }
    $fecha = mysqli_close($conexao);
}   
?>