<?php

namespace Modules\User;

class User {
   
    protected $login;
    protected $password;
    
    public function setLogin($login){
        if(strlen($login)>=6 && is_string($login)){
            $this->login = $login;
            return true;
        }        
        return false;
    }
    public function setPassword($password){
        if(strlen($password)>=6 && is_string($password)){
            $this->password = $password;
            return true;
        }        
        return false;
    }
    public function getLogin(){
        return $this->login;
    }
    public function getPassword(){
        return $this->password;
    }
    
}
