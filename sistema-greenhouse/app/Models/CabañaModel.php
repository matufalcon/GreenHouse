<?php

namespace App\Models;

use CodeIgniter\Model;


class CabañaModel extends Model
{
    protected $table = 'cabaña';
    protected $primaryKey = 'cabaña-id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nombre', 'descripcion', 'imagen', 'precio', 'estado-id', 'capacidad-id'];

    public function obtenerTodasLasCabañas()
    {
        $db = \Config\Database::connect();
        $query = $db->query("CALL ObtenerTodasLasCabañas()");
        return $query->getResult();
    }

    //agregue
    public function getCabañasDisponibles()
    {
        return $this->where('estado', 1)->findAll();
    }

    public function consultarCabañas($fechaEntrada, $fechaSalida)
    {
        $db = \Config\Database::connect();
        $query = $db->query("CALL ConsultarCabañas(?, ?)", [$fechaEntrada, $fechaSalida]);
        return $query->getResult();
    }

    public function buscarCabañaId($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query("CALL BuscarCabañaId(?)", [$id]);
        return $query->getRow();
    }
}