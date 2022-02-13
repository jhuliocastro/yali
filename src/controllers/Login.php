<?php
namespace Controller;

use Models\Login_Model;

class Login extends Controller{
    public function home(){
        parent::render("login");
    }

    public function login(){
        $dados = (object)$_POST;
        $dados->senha = md5($dados->senha);

        $retorno = null;
        $model = new Login_Model();
        var_dump($model);
        $retornoEmail = $model->find()->fetch(true);
        var_dump($model);
        /* if($retornoEmail == 0){
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

         var_dump($dados);

         session_start();
         $_SESSION["usuario"] == $dados->id;*/
    }
}