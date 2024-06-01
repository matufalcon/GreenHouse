<?php

namespace App\Models;

use CodeIgniter\Model;


class CabañaModel extends Model
{
    protected $table = 'cabaña';
    protected $primaryKey = 'cabaña-id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nombre','descripcion','imagen','precio','estado-id','capacidad-id'];

    public function obtenerTodasLasCabañas()
    {
        return $this->select('cabaña.*, estado.estado-nombre AS nombre_estado, capacidad.capacidad-nombre AS capacidad')
                    ->join('estado', 'estado.estado-id = cabaña.estado-id')
                    ->join('capacidad', 'capacidad.capacidad-id = cabaña.capacidad-id')
                    ->findAll();
    }
    
    public function consultarCabañas($fechaEntrada, $fechaSalida)
    {
        return $this->select('cabaña.*, capacidad.capacidad-nombre AS capacidad, estado.estado-nombre AS estado')
                    ->join('reserva', 'reserva.`cabaña-id` = cabaña.`cabaña-id`', 'left')
                    ->join('capacidad', 'capacidad.`capacidad-id` = cabaña.`capacidad-id`')
                    ->join('estado', 'estado.`estado-id` = cabaña.`estado-id`')
                    ->where('reserva.`reserva-id` IS NULL')
                    ->orWhere('reserva.`fecha-entrada` >', $fechaSalida)
                    ->orWhere('reserva.`fecha-salida` <', $fechaEntrada)
                    ->findAll();
    }

    public function buscarCabañaId($id)
    {
        return $this->select('cabaña.*, capacidad.capacidad-nombre AS capacidad, estado.estado-nombre AS estado')
                    ->join('capacidad', 'capacidad.capacidad-id = cabaña.capacidad-id')
                    ->join('estado', 'estado.estado-id = cabaña.estado-id')
                    ->where('cabaña.cabaña-id', $id)
                    ->first();
    }
    


}