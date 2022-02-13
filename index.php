<?php
require "vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL);

$router->namespace("Controller"); #DEFINICAO DO NAMESPACE

//ROTAS
$router->get("/", "Login:home");
$router->post("/login", "Login:login");

$router->group("error");
$router->get("/{code}", "Error:home", "error.home");

$router->dispatch();

if($router->error()){
    $router->redirect("error.home");
}