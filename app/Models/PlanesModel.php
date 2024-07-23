<?php

namespace App\Models;

use CodeIgniter\Model;

class PlanesModel extends Model
{
    protected $table         = 'planes';
    protected $primaryKey = 'plan_id';
    protected $allowedFields = [
        'plan_id', 'nombre', 'pago_mensual', 'cantidad_minutos', 'cantidad_mensajes'
    ];

    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}