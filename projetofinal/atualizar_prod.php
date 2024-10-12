<?php
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];
$preco = str_replace(",",".",$preco);
$conexao = mysqli_connect
('localhost','root','','projetofinal');
$sql = "update produto set descricao='$descricao', quantidade=$quantidade where codigo=$codigo";
$executar = mysqli_query($conexao, $sql);
if($executar){
    echo "Atualizado com sucesso!";
}
else{
    echo "Erro";
}
$fechar = mysqli_close($conexao);

?>