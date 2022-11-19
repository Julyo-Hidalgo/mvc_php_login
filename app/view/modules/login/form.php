<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        fieldset{
            margin: auto;
            width: 30%;
            position: relative;
        }
        label, input{
            display: block;
        }
    </style>
</head>
<body>
    <form method="post" action="/login/auth">
        <fieldset>
            <legend>Login:</legend>
            
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha">

            <button type="submit">Entrar</button>
        </fieldset>
    </form>
</body>
</html>