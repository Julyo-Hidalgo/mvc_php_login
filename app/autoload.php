<?php

spl_autoload_register(
    function ($classe){

        $dao = 'dao/' . $classe . '.php';
        $model = 'model/' . $classe . '.php';
        $controller = 'controller/' . $classe . '.php';
        
        if (file_exists($dao)){
            include $dao;
        }else if (file_exists($model)){
            include $model;
        }else if (file_exists($controller)){
            include $controller;
        }
    }

);