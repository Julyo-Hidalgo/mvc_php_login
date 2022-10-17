<?php
class login_controller{
    public static function form(){
        include 'view\modules\login\login.php';
    }

    public static function auth(){
        include 'model/login_model.php';
        $model = new login_model();

        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];

        $model->auth();

        header("Location: /pessoa");
    }
}