<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CabañaModel;


class Cabaña extends BaseController
{
    public function index()
    {

    }

    public function ver_cabañas()
    {
        $cabañaModel = new CabañaModel();
        $fechaEntrada = trim($this->request->getPost('fechaEntrada'));
        $fechaSalida = trim($this->request->getPost('fechaSalida'));

        if($fechaEntrada <= $fechaSalida){
            $data['cabañas'] = $cabañaModel->findAll();
            echo view('header');
            echo view('navbar');
            echo view('reservar-cabaña', $data);
            echo view('footer');
        }else{            
            session()->setFlashdata('error', 'Debe introducir una fecha valida.');
            return $this->response->redirect(base_url().'reservar');
        }
        
        
    }
}