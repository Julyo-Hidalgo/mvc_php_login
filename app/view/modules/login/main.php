<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Usuário:</title>
    <link rel="stylesheet" href= "/view/modules/login/css/estilo.css">
</head>
<body>
    <h1>área do usuário</h1>
    <?php
    echo(is_object($_SESSION['usuario_logado']));
    ?>
    <form action="/cadastro?id=<?= $_SESSION['usuario_logado']->id ?>">
        <button>alterar meus dados</button>
    </form>
</body>
</html>