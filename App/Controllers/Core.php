<?php
namespace App\Controllers;

use League\Plates\Engine;


abstract class Core
{
    protected $view;
    protected $router;

    public function __construct($router)
    {
        $this->router = $router;
        $this->view = Engine::create(dirname(__DIR__, 2)."/view", "php");
        $this->view->addData(["router" => $this->router]);
    }

    public function json(string $message, array $param):string
    {
        return json_encode([$message=>$param]);
    }

}