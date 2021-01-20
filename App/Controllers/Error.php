<?php
namespace App\Controllers;

class Error extends Core
{
    public function __construct($router)
    {
        parent::__construct($router);
    }

    public function home(array $data):void
    {
        echo $this->view->render('error',[
            "error" => $data['errcode']
        ]);
    }
}