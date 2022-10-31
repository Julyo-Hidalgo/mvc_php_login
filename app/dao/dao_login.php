<?php
class login_dao{
    private $conexao;
    public function __construct(){
        $dns = "mysql:host=localhost:3307;dbname=mydb";
        $this->conexao = new PDO($dns, 'root', 'etecjau');
    }

    public function SelectByEmailAndSenha(login_model $model){
        $sql = "select * from user where email = ? and pwd = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->email);
        $stmt->bindValue(2, $model->senha);

        $stmt->execute;

        return $stmt->fetchObject("login_model");
    }
}