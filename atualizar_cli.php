<?php
$codigo = $_POST['idcliente'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$conexao = mysqli_connect
('localhost','root','','projetofinal');
$sql = "update cliente set nome='$nome', cpf='$cpf', telefone='$telefone' where idcliente=$codigo";
$executar = mysqli_query($conexao, $sql);
if($executar){
    echo "Atualizado com sucesso!";
}
else{
    echo "Erro";
}
$fechar = mysqli_close($conexao);

?>