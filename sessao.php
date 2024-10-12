<?php
session_start();
ini_set("display_errors",0);
$nome = $_SESSION['id'];
if($nome == null){
	die("Usuário não autenticado!
	<a href='login.html'>Logar</a>");
}
