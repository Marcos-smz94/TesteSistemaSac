<?php
include('/xampp/htdocs/teste/conexao.php');

// Checando se tem algo escrito
if(empty($_POST['titulomsg']) || empty($_POST['reclamacao']) || empty($_POST['destino'])){
    header('Location: reclamacoesAluno.php');
    exit();
} else {
    $titulo = $_POST['titulomsg'];
    $msg = $_POST['reclamacao'];
    $destino = filter_input(INPUT_POST, "destino", FILTER_VALIDATE_INT);
    $status = 0;       
};

$sql = "INSERT INTO mensagens (msgtitulo, msgtxt, msgdestino, msgstatus, msgdata) VALUES (?, ?, ?, ?, Now())";

$stmt = mysqli_stmt_init($conexao);

if ( ! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conexao));
}

mysqli_stmt_bind_param($stmt, "ssii", $titulo, $msg, $destino, $status);

mysqli_stmt_execute($stmt);
header("Location: reclamacoesAluno.php");
exit();
