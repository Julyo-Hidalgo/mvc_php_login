<?php

namespace app\model;
use app\dao\login_dao;

class login_model extends model{
    public $id, $nome, $email, $senha;

    public function autenticar(){
        $dao = new login_dao();
        
        $usuario_dados_logado = $dao->selectByEmailAndSenha($this->email, $this->senha);

        if (is_object($usuario_dados_logado)){
            return $usuario_dados_logado;
        }else{
            null;
        }
    }

    public function save(){
        $dao = new login_dao();

        $dao->insert($this);
    }
}