<?php
if(!$_SESSION['UsuarioNome']){
    header('Location: /xampp/htdocs/teste/index.php');
    exit();
};