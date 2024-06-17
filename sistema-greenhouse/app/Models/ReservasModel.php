<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasModel extends Model
{
    protected $table = 'reservas';
    protected $primaryKey = 'reserva-id';
    protected $allowedFields = [
        'fecha-entrada', 'fecha-salida', 'cantHuesped', 'monto', 
        'fecha-pago', 'usuario-id', 'cabaña-id', 'mediosPago-id'
    ];
}