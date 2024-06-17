<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        helper(['form']);
    }
    public function index()
    {
        echo view('header');
        echo view('navbar');
        echo view('principal');
        echo view('footer');
    }

    public function consultar_cabañas()
    {
        echo view('header');
        echo view('navbar');
        echo view('consultar-cabañas');
        echo view('footer');
    }
}
