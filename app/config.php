<?php
//definindo as configurações do bd
//variável super global do php, que é um array associativo
$_ENV ['db'] ['host'] = 'localhost:3307';
$_ENV ['db'] ['user'] = 'root';
$_ENV ['db'] ['pwd'] = 'etecjau';
$_ENV ['db'] ['name']  = 'mydb';

//definindo o caminho dos diretórios
define('BASEDIR', dirname(__FILE__, 2) . '/');