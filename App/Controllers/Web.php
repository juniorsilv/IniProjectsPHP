<?php
namespace App\Controllers;

class Web extends Core
{
    public function __construct($router)
    {
        parent::__construct($router);
    }

    public function home():void
    {
        echo $this->view->render("home");
    }
}