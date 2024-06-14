<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'reservas';
    protected $primaryKey = 'reserva-id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['fecha-entrada', 'fecha-salida', 'usuario-id', 'cabaña-id'];
}