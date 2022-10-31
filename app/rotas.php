<?php

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url){
    case '/':
        echo "Início";
    break;

    case '/login':
        login_controller::form_login();
    break;

    case '/login/auth':
        login_controller::auth();  
    break;

    case '/cadastro':
        login_controller::form_cadastro();
    break;

    default:
        echo "erro 404";
    break;
}