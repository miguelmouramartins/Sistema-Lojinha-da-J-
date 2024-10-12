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
                <title>Cadastro de Clientes</title>
            </head>
            <body>
                <div>
                    <form action="cad_cli.php" method="post">
                    <img src="imagens/logolojinhadaje1.png" width="130px"><br>
                        <h3> Cadastro de Clientes </h3>
                        Nome Completo: <input type="text" name="nome"><br>
                        CPF:  <br><input type="text" name="cpf"><br>
                        Telefone: <input type="text" name="telefone"><br>
                        Data de Nascimento: <br> <input type="date" name="datanasc"><br>
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
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $datanasc = $_POST['datanasc'];
    $telefone = $_POST['telefone'];

    $conexao = mysqli_connect('localhost', 'root', '', 'projetofinal');
    $comando ="INSERT INTO cliente(idcliente, nome_completo, cpf, datanasc, telefone) values('$id', '$nome', '$cpf', '$datanasc', '$telefone')";
    $executar = mysqli_query($conexao, $comando);
    if($executar ==1){
        echo "listar_cli.php";
    }else{
        echo "erro";
    }
    $fecha = mysqli_close($conexao);
}   
?>