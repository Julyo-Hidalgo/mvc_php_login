<?php

namespace app\dao;

use app\model\login_model;

class login_dao extends dao{
    public function __construct(){
        parent::__construct();
    }

    public function selectByEmailAndSenha($email, $senha){
        $sql = "select * from login where email = ? and senha = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        return $stmt->fetchObject("app\model\login_model");
    }
}