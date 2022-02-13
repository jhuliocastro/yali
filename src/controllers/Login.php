<?php
namespace Controller;

class Login extends Controller{
    public function home(){
        parent::render("login");
    }

    public function login(){
        var_dump($_POST);
    }
}