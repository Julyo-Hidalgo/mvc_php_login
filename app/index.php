<?php

session_start();

include 'controller/login_controller.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url){
    case '/':
        echo "Início";
    break;

    case '/login':
        login_controller::form();
    break;

    case '/login/auth':
        login_controller::auth();  
    break;

    default:
        echo "erro 404";
    break;
}