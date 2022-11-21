<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href= "/view/modules/login/css/estilo.css">
</head>
<body>
    <form method="post" action="/cadastro/save">
        <h1>Cadastro</h1>    
        <fieldset>
            <legend>Cadastro</legend>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome">
                
                <label for="nome">Email</label>
                <input type="text" id="email" name="email">

                <label for="nome">Senha</label>
                <input type="password" id="senha" name="senha">
                
                <button>Cadastrar</button>
        </fieldset>
    </form>
</body>
</html>