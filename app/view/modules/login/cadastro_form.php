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
                <input type="hidden" name="id" value="<?= $model->id ?>">

                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value="<?= $model->nome ?>">
                
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="<?= $model->email ?>">

                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" value="<?= $model->senha ?>">
                
                <button>Cadastrar</button>
        </fieldset>
    </form>
</body>
</html>