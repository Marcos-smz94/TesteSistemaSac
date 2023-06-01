<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá, qual a sua reclamação?</h1>
    <form action="reclamacoesProcesso.php" method="POST">
    <p>  
        <label for="">Titulo</label>
        <input type="text" name="titulomsg">
    </p>    
    <p>  
        <label for="">Reclamação</label>
        <input type="text" name="reclamacao">
    </p>    
    <p>
        <select name="destino">
        <option value="">Destinatario</option>
        <option value="1">Faculdade</option>
        <option value="2">Professores</option>
        <option value="3">Coordenadores</option>
        <option value="4">Direção</option>
        <option value="5">Serviços gerais</option>
        </select> 
    </p>  
    <p>
        <button type="submit">Enviar</button>
    </p>
    <p></p>

    </form>
</body>
</html>