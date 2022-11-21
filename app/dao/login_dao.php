<?php

namespace app\dao;

use app\model\login_model;
use app\model\model;

class login_dao extends dao{
    public function __construct(){
        parent::__construct();
    }

    public function selectByEmailAndSenha($email, $senha){
        $sql = "select * from user where email = ? and senha = sha1(?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        return $stmt->fetchObject("app\model\login_model");
    }

    public function insert(model $model){
        $sql = "insert into user (nome, email, senha) values(?, ?, sha1(?))";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
        $stmt->execute();

        header("Location: /");
    }
}