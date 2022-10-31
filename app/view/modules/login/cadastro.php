<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="view/modules/login/css/estilo.css" type="text/css">
</head>
<body>
    <div id="form" method="post" action="/login/auth">
        <form>
            <legend>cadastro:</legend>

            <label for="email">email:</label>
            <input id="email" name="email" type="text">

            <label for="senha">senha:</label>
            <input id="senha" name="senha" type="text">

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>