<?php
class login_model{
    public $email, $senha;

    public function auth(){
        include 'dao/dao_login.php';
        $dao = new pessoa_dao();
        $dao->SelectByEmailAndSenha($this);
    }

}