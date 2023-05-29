<?php
session_start();
include('/xampp/htdocs/teste/login/verificadorlogin.php')
?>
<h2><?php echo $_SESSION['UsuarioID'],  $_SESSION['UsuarioNome'], $_SESSION['UsuarioNivel']?></h2>