<?php

namespace app\dao;

use app\model\pessoa_model;

use \PDO;

/* Namespace - espaço para pôr  classes. Usado para diferenciar classes do programador das de terceiros.*/
/* namespace geral é o app. o sub namespace é o dao */

class pessoa_dao extends dao{
    /*crud completo
        insert -> create
        select -> read
        update -> ...
        delete -> ...
    */

    public function __construct(){
        parent::__construct();
        /* operador para acessar métodos da superclasse */
    }

    public function insert(pessoa_model $model){
        $sql = "insert into pessoa(nome, cpf, data_nascimento) values (?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);

        $stmt->execute();
    }

    public function select(){
    	$sql = "select * from pessoa";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

	    return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    /* função para preencher o formulário com dados existentes -> para depois fazer o update*/
    public function select_by_id(int $id){
        $sql = "select * from pessoa where id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("app\model\pessoa_model");
    }

    public function update(pessoa_model $model){
        $sql = "update pessoa set nome = ?, cpf = ?, data_nascimento = ? where id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt ->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    }

    public function delete(int $id){
        $sql = "delete from pessoa where id =  ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}