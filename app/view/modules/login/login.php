<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        #form{
            position: relative;
            margin: 0 auto;
            width: 30%;
        }

        form{
            text-align: center;
        }

        input{
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div id="form" method="post" action="/login/auth">
        <form>
            <label for="email">email:</label>
            <input id="email" name="email" type="text">

            <label for="senha">senha:</label>
            <input id="senha" name="senha" type="number">

            <button type="submit">enviar</button>
        </form>
    </div>
</body>
</html>