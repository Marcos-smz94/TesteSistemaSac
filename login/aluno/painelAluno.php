<?php
session_start();
include('/xampp/htdocs/teste/login/verificadorlogin.php');
include('msgrow.php');

?>
<h2><?php echo $_SESSION['UsuarioID'],  $_SESSION['UsuarioNome'], $_SESSION['UsuarioNivel']?></h2>

<p><a href="reclamacoesAluno.php">Aluno</a></p>

