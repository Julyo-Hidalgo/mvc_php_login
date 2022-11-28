<?php
//definindo as configurações do bd
//variável super global do php, que é um array associativo
$_ENV ['db'] ['host'] = 'localhost:3306';
$_ENV ['db'] ['user'] = 'root';
$_ENV ['db'] ['pwd'] = 'nao@interessa';
$_ENV ['db'] ['name']  = 'mydb';

//definindo o caminho dos diretórios
define('BASEDIR', dirname(__FILE__, 2) . '/');