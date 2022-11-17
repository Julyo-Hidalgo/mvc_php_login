<?php

namespace app\controller;
use app\model\login_model;

class login_controller extends controller{
    public static function index(){
        parent::render('/login/form');
    }

    public static function auth(){
        
    }
}