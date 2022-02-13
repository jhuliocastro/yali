<?php
namespace Controller;

use Models\Login_Model;
use Alertas\Alert;

class Login extends Controller{
    public function __construct($router){
        $this->router = $router;
    }

    public function home(){
        parent::render("login");
    }

    public function login(){
        $dados = (object)$_POST;
        $dados->senha = md5($dados->senha);

        $retorno = null;
        $model = new Login_Model();
        $retornoEmail = $model->retornoEmail($dados->usuario);
        if($retornoEmail == 0){
             $retornoUsuario = $model->retornoUsuario($dados->usuario);
             if ($retornoUsuario > 0){
                 $retorno = "usuario";
             }
         }else{
             $retorno = "email";
         }

         if($retorno == "email"){
             $dados = $model->loginEmail($dados->usuario, $dados->senha);
         }else if($retorno == "usuario"){
             $dados = $model->loginUsuario($dados->usuario, $dados->senha);
         }

         if(!$dados->id){
            Alert::error("Dados incorretos!", "Verifique e tente novamente.", "/");
         }else{
             session_start();
             $_SESSION["usuario"] == $dados->id;
             $this->router->redirect("/dashboard");
         }


    }
}