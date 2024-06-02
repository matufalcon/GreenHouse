<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CabañaModel;

class Cabaña extends BaseController
{
    public function ver_cabañas()
    {
        $cabañaModel = new CabañaModel();
        $fechaActual = date("Y-m-d");
        $fechaEntrada = $this->request->getPost('fechaEntrada');
        $fechaSalida = $this->request->getPost('fechaSalida');

        if($fechaEntrada <= $fechaSalida && $fechaEntrada > $fechaActual){
            $data['cabañas'] = $cabañaModel->consultarCabañas($fechaEntrada, $fechaSalida);
            echo view('header');
            echo view('navbar');
            echo view('consultar-cabañas', $data);
            echo view('footer');
        } else {
            session()->setFlashdata('error', 'Debe introducir una fecha valida.');
            return $this->response->redirect(base_url().'consultar-cabanas');
        }
    }   
        
    public function detalles($id)
    {
        $cabañaModel = new CabañaModel();
        $cabaña = $cabañaModel->buscarCabañaId($id);

        if ($cabaña === null) {
            return redirect()->to(base_url('cabañas-disponibles'))->with('error', 'Cabaña no encontrada');
        }

        $data['cabaña'] = $cabaña;

        echo view('header');
        echo view('navbar');
        echo view('detalles-cabaña', $data); 
        echo view('footer');
    }
}
