<?php
include('/xampp/htdocs/teste/conexao.php');
header('Access-Control-Allow-Origin: http://localhost/teste');


$sql = "SELECT * FROM mensagens";
$result = mysqli_query($conexao, $sql);

$createarray = array();
while($row = mysqli_fetch_assoc($result)) {
    $createarray[] = $row;
    $json = json_encode($createarray, JSON_UNESCAPED_UNICODE);
}

echo $json;

mysqli_close($conexao);

