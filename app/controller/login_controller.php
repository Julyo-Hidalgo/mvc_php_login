<?php
class login_controller{
    public static function form_login(){
        include 'view\modules\login\login.php';
    }

    public static function form_cadastro(){
        include 'view/modules/login/cadastro.php';
    }

    public static function auth(){
        $model = new login_model();

        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];

        $model->auth();

        header("Location: /");
    }
}