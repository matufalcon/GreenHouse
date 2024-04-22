<?php

namespace App\Models;

use CodeIgniter\Model;


class CabañaModel extends Model
{
    protected $table = 'cabaña';
    protected $primaryKey = 'cabaña-id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nombre','capacidad','descripcion','imagen','estado','precio'];
}