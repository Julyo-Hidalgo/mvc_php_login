<?php

use app\controller\login_controller;
use app\controller\pessoa_controller;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url){
    case '/':
        echo "Início";
    break;

    //login
    case '/login':
        login_controller::index();
    break;
    
    case '/login/auth':
        login_controller::auth();
    break;

    //pessoa
    case '/pessoa':
        pessoa_controller::index();
    break;

    case '/pessoa/form':
        pessoa_controller::form();
    break;

    case '/pessoa/form/save':
        pessoa_controller::save();
    break;

    case '/pessoa/delete':
        pessoa_controller::delete();
    break;

    default:
        echo "erro 404";
    break;
}