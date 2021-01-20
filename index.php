<?php
ob_start();
session_start();

use CoffeeCode\Router\Router;

require __DIR__."/vendor/autoload.php";

$router = new Router(BASE);
$router->namespace('App\Controllers');

/** */
$router->group(null);
/** WEB */
$router->get('/', 'Web:home', 'web.home');

/** ERROR */
$router->group('ops');
$router->get('/{errcode}', 'Error:Erro', 'error.erro');

/** PROCESS ROUTER ERROR */
$router->dispatch();
if($router->error())
{
    $router->redirect("ops/{$router->error()}");
}

ob_end_flush();

