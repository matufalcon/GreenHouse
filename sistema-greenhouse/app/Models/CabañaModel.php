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
        return $this->select('cabaña.*, estado.descripcion AS nombre_estado, capacidad.descripcion AS capacidad')
                    ->join('estado', 'estado.estado-id = cabaña.estado-id')
                    ->join('capacidad', 'capacidad.capacidad-id = cabaña.capacidad-id')
                    ->findAll();
    }
    
    public function consultarCabañas($fechaLlegada, $fechaSalida)
    {
        return $this->select('cabaña.*, capacidad.descripcion AS capacidad, estado.descripcion AS estado')
                    ->join('reserva', 'reserva.`cabaña-id` = cabaña.`cabaña-id`', 'left')
                    ->join('capacidad', 'capacidad.`capacidad-id` = cabaña.`capacidad-id`')
                    ->join('estado', 'estado.`estado-id` = cabaña.`estado-id`')
                    ->where('reserva.`reserva-id` IS NULL')
                    ->orWhere('reserva.`fecha-llegada` >', $fechaSalida)
                    ->orWhere('reserva.`fecha-salida` <', $fechaLlegada)
                    ->findAll();
    }

    public function buscarCabañaId($id)
    {
        return $this->select('cabaña.*, capacidad.descripcion AS capacidad, estado.descripcion AS estado')
                    ->join('capacidad', 'capacidad.capacidad-id = cabaña.capacidad-id')
                    ->join('estado', 'estado.estado-id = cabaña.estado-id')
                    ->where('cabaña.cabaña-id', $id)
                    ->first();
    }
    


}