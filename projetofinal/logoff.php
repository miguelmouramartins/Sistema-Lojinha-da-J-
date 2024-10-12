<?php
session_start();
$_SESSION['id'] = null;
session_destroy();
echo "Logout realizado com sucesso!";
?>