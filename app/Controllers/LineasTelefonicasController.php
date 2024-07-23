<?php

namespace App\Controllers;
use App\Models\LineasTelefonicasModel;

class LineasTelefonicasController extends BaseController
{
    public function index(): string
    {
        $lineas = new LineasTelefonicasModel();
        $datos['datos']=$lineas->findALL();
        
        return view('lineas_telefonicas',$datos);
    }
}
