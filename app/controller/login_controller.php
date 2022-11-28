<?php

namespace app\controller;
use app\model\login_model;

class login_controller extends controller{
    public static function index(){
        parent::render('login/login_form');
    }

    public static function main(){
        parent::render('login/main');
    }

    public static function cadastro(){
        $model = new login_model();

        if(isset($_GET['id']))
            $model->email = $_SESSION['email'];
            $model = $model->autenticar();

        parent::render('login/cadastro_form', $model);
    }

    public static function auth(){
        $model = new login_model();
        
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];

        $usuario_logado = $model->autenticar();

        if ($usuario_logado != null){
            $_SESSION['usuario_logado'] = $usuario_logado;
            header("Location: /main");
        }else
            header("Location: /login?erro=true");
    }

    public static function save(){
        $model  = new login_model();

        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];

        $model->save();

        header("Location: /login");
    }
}