<?php
class login_model{
    public $email, $senha;

    public function auth(){
        $dao = new login_dao();
        
        $rows =  $dao->SelectByEmailAndSenha($this);

        if ($rows-> email == $this-> email){
            return $rows;
        }else{
            return new login_model();
        }
    }
}