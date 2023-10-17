<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo View('templates/header');
        echo View('inicio/index');
        echo View('templates/footer');
    }
}
