<?php
include('/xampp/htdocs/teste/conexao.php');

// Checando se tem algo escrito
if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha']) || empty($_POST['tipousuario'])){
    header('Location: cadastro.php');
    exit();
} else {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = SHA1($_POST['senha']);
    $tipousuario = $_POST['tipousuario'];
};

$sql = "INSERT INTO usuarios (nome, senha, email, nivel) VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conexao);

if ( ! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conexao));
}

mysqli_stmt_bind_param($stmt, "ssss", $nome, $senha, $email, $tipousuario);

mysqli_stmt_execute($stmt);
header("Location: /teste/index.php");

