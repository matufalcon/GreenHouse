<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('navbar');
        echo view('principal');
        echo view('footer');
    }

    public function reservar()
    {
        echo view('header');
        echo view('navbar');
        echo view('reservar-cabaña');
        echo view('footer');
    }
}
