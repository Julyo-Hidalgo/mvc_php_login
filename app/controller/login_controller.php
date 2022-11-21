<?php

namespace app\controller;
use app\model\login_model;

class login_controller extends controller{
    public static function index(){
        parent::render('login/login_form');
    }

    

    public static function cadastro(){
        parent::render('login/cadastro_form');
    }

    public static function auth(){
        $model = new login_model();
        
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];

        $usuario_logado = $model->autenticar();

        if ($usuario_logado != null){
            $_SESSION['usuario_logado'] = $usuario_logado;
            header("Location: /");
        }else
            header("Location: /login?erro=true");
    }

    public static function save(){
        $model  = new login_model();

        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];

        $model->save();
    }
}