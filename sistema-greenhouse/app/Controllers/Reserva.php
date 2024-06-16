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
        $session = session();
        $cabañaModel = new CabañaModel();
        $cabaña = $cabañaModel->buscarCabañaId($id);

        if ($cabaña === null) {
            return redirect()->to(base_url('cabañas-disponibles'))->with('error', 'Cabaña no encontrada');
        }

        $fechaDesde = $session->get('fechaDesde');
        $fechaHasta = $session->get('fechaHasta');
        $diferenciaDias = $this->calcularDiferenciaDias($fechaDesde, $fechaHasta);
        $precioTotal = $diferenciaDias * $cabaña->precio;

        $data = [
            'cabaña' => $cabaña,
            'fechaDesde' => $fechaDesde,
            'fechaHasta' => $fechaHasta,
            'diferenciaDias' => $diferenciaDias,
            'precioTotal' => $precioTotal
        ];

        echo view('header');
        echo view('navbar');
        echo view('realizar-reserva', $data); 
        echo view('footer');
    }

    public function realizarReserva($id)
    {
        $session = session();
        $cabañaModel = new CabañaModel();
        $cabaña = $cabañaModel->buscarCabañaId($id);

        if ($cabaña === null) {
            return redirect()->to(base_url('cabañas-disponibles'))->with('error', 'Cabaña no encontrada');
        }

        $fechaDesde = $session->get('fechaDesde');
        $fechaHasta = $session->get('fechaHasta');
        $cantidadHuespedes = $this->request->getPost('cantidadHuespedes');
        $diferenciaDias = $this->calcularDiferenciaDias($fechaDesde, $fechaHasta);
        $precioTotal = $diferenciaDias * $cabaña->precio;

        $data = [
            'cabaña' => $cabaña,
            'cantidadHuespedes' => $cantidadHuespedes,
            'paquete' => $this->request->getPost('paquete'),
            'medioPago' => $this->request->getPost('medioPago'),
            'fechaDesde' => $fechaDesde,
            'fechaHasta' => $fechaHasta,
            'diferenciaDias' => $diferenciaDias,
            'precioTotal' => $precioTotal
        ];

        echo view('header');
        echo view('navbar');
        echo view('realizar-reserva', $data);
        echo view('confirmar-reserva', $data); 
        echo view('footer');
    }

    private function calcularDiferenciaDias($fechaDesde, $fechaHasta)
    {
        $datetime1 = new \DateTime($fechaDesde);
        $datetime2 = new \DateTime($fechaHasta);
        $interval = $datetime1->diff($datetime2);
        return $interval->days;
    }
}
