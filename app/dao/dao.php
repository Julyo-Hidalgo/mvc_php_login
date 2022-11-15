<?php

namespace app\dao;
use \PDO;

abstract class dao{
    /*essa é uma superclasse */

    protected $conexao;

    public function __construct(){
        $dns = "mysql:host=" . $_ENV['db'] ['host'] . ";dbname=" . $_ENV['db']['name'];
        $this->conexao = new \PDO($dns, $_ENV['db'] ['user'], $_ENV['db']['pwd'] );
        /* obrigado a especificar namespaces - PDO, sendo classe interna, fica no namespace geral */
    }
}