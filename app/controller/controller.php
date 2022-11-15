<?php

namespace app\controller;

abstract class controller{
    protected static function render($view, $model = null){
        $arquivo_view = "view/modules/$view.php";

        if (file_exists($arquivo_view))
            include $arquivo_view;
        else
            echo 'O arquivo da view não existe! Arquivo: ' . $arquivo_view;
    }
}