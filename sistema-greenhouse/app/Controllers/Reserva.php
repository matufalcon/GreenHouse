<?php

namespace App\Controllers;
use App\Models\ReservasModel;
use App\Models\CabañaModel;
use CodeIgniter\Controller;

class Reserva extends Controller
{
    public function __construct()
    {
        helper(['form']);
    }

    public function create($id)
    {
        $cabañaModel = new CabañaModel();
        $cabaña = $cabañaModel->buscarCabañaId($id);

        if ($cabaña === null) {
            return redirect()->to(base_url('cabañas-disponibles'))->with('error', 'Cabaña no encontrada');
        }

        $data['cabaña'] = $cabaña;

        echo view('header');
        echo view('navbar');
        echo view('realizar-reserva', $data); 
        echo view('footer');
    }

    public function realizarReserva($id)
    {
        $cabañaModel = new CabañaModel();
        $cabaña = $cabañaModel->buscarCabañaId($id);

        $data['cabaña'] = $cabaña;
        $data['cantidadHuespedes']= $this->request->getPost('cantidadHuespedes');
        $data['paquete']= $this->request->getPost('paquete');
        $data['medioPago'] = $this->request->getPost('medioPago');

        echo view('header');
        echo view('navbar');
        echo view('realizar-reserva', $data);
        echo view('confirmar-reserva', $data); 
        echo view('footer');
    }
}
