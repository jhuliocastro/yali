<?php
namespace Models;

use CoffeeCode\DataLayer\DataLayer;

class Login_Model extends DataLayer{
    public function __construct()
    {
        parent::__construct("usuarios", [], "id", true);
    }

    public function retornoEmail($email)
    {
        return $this->find("email=:email", "email=$email")->count();
    }

    public function retornoUsuario($usuario){
        return $this->find("usuario=:usuario", "usuario=$usuario")->count();
    }

    public function loginUsuario($usuario, $senha){
        return $this->find("usuario=:usuario AND senha=:senha", "usuario=$usuario&senha=$senha")->fetch();
    }

    public function loginEmail($email, $senha){
        return $this->find("email=:email AND senha=:senha", "email=$email&senha=$senha")->fetch();
    }
}