<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'usuario-id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nombre', 'apellido', 'email', 'usuario', 'contraseña', 'tipoUsuario-id'];
}

