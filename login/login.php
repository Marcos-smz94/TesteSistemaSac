<?php
include('/xampp/htdocs/teste/conexao.php');

// Checando se tem algo escrito
if(empty($_POST['nome']) || empty($_POST['senha'])){
    header('Location: /teste/index.php');
    exit();
};

// Validação do usuario e senha 
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "SELECT id, nome, nivel FROM usuarios WHERE nome = '{$nome}' AND senha = SHA1('{$senha}') LIMIT 1";

$query =  mysqli_query($conexao, $sql);
if (mysqli_num_rows($query) != 1) {

    echo "Login inválido!"; exit;

} else {

    $resultado = mysqli_fetch_assoc($query);
    if (!isset($_SESSION)) session_start();

    // Salva os dados encontrados na sessão
    $_SESSION['UsuarioID'] = $resultado['id'];
    $_SESSION['UsuarioNome'] = $resultado['nome'];
    $_SESSION['UsuarioNivel'] = $resultado['nivel'];

    // Redireciona o visitante
    /* Niveis de acesso: 1 - Aluno
                         2 - Faculdade
                         3 - Professores
                         4 - Direção
                         5 - Coordenadores 
                         6 - Serviços gerais */
    if ($_SESSION['UsuarioNivel'] == '1'){
        header("Location: /teste/login/aluno/painelAluno.php"); exit;
    } elseif ($_SESSION['UsuarioNivel'] == '2'){
        header("Location: /teste/login/faculdade/painelFaculdade.php"); exit;
    } elseif ($_SESSION['UsuarioNivel'] == '3'){
        header("Location: /teste/login/professores/painelProfessores.php"); exit;
    } elseif ($_SESSION['UsuarioNivel'] == '4'){
        header("Location: /teste/login/direcao/painelDirecao.php"); exit;
    } elseif ($_SESSION['UsuarioNivel'] == '5'){
        header("Location: /teste/login/coordenadores/painelCoodenadores.php"); exit;
    } else{
        header("Location: /teste/login/gerais/painelGerais.php"); exit;
    };
};

