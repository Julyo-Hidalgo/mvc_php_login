<?php

namespace app\model;
use app\dao\pessoa_dao;

class pessoa_model extends model{
    public $id, $nome, $cpf, $data_nascimento;

    public function save(){
        $dao = new pessoa_dao();

        if (empty($this->id)){
            //se o id do formulário for vazio é um novo registro senão é uma edição
            $dao->insert($this);
        }else{
            $dao->update($this);
        }
    }

    public function get_all_rows(){
        $dao = new pessoa_dao();
        $this->rows = $dao->select();
    }

    public function get_by_id(int $id){

        $dao = new pessoa_dao();

        $obj = $dao->select_by_id($id); //quando falha essa função da dao retorna falso

        return ($obj) ? $obj : new pessoa_model(); //operado ternário
    }

    public function delete(int $id){
        $dao = new pessoa_dao();

        $dao->delete($id);
    }
}