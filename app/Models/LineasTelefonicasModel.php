<?php

namespace App\Models;

use CodeIgniter\Model;

class LineasTelefonicasModel extends Model
{
    protected $table         = 'lineas_telefonicas';
    protected $primaryKey ='no_telefono';
    protected $allowedFields = [
        'no_telefono', 'fecha_pago', 'meses_atraso', 'plan_id', 'cliente_id'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}