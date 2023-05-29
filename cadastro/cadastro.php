<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste</h1>
    <form action="formcadastro.php" method="POST">
    <p>  
        <label for="">Nome</label>
        <input type="text" name="nome">
    </p>    
    <p>  
        <label for="">Email</label>
        <input type="text" name="email">
    </p>    
    <p>  
        <label for="">Senha</label>
        <input type="password" name="senha">
    </p>  
    <p>
        <select name="tipousuario">
        <option value="">Tipo de usuario</option>
        <option value="1">Aluno</option>
        <option value="2">Faculdade</option>
        <option value="3">Professor</option>
        <option value="4">Coordenador</option>
        <option value="5">Direção</option>
        <option value="6">Serviços gerais</option>
        </select> 
    </p>  
    <p>
        <button type="submit">Enviar</button>
    </p>
    <p></p>

    </form>
</body>
</html>