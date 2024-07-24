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

    public function eliminarLineas($no_telefono = null)
{ 
    $lineas = new LineasTelefonicasModel();
    $lineas->where('no_telefono', $no_telefono)->delete();  // Asumiendo que 'no_telefono' es la clave primaria
    return redirect()->route('lineas');
}

    public function buscarLineas($no_telefono= null){
    //  echo "codigo".$no_telefono;
    $lineas = new LineasTelefonicasModel();
    //select * from planes where plan_id = $id;
    $datos['datos']=$lineas->where('no_telefono', $no_telefono)->first();
    //print_r($datos);
    return view('form_modificar_lineas',$datos);
  }

  public function modificarLineas(){
    $lineas = new LineasTelefonicasModel();
    $datos=[
        'no_telefono'=>$this->request->getVar('txtNoTelefono'),
        'fecha_pago'=>$this->request->getVar('txtFecha'),
        'meses_atraso'=>$this->request->getVar('txtMeses'),
        'plan_id'=>$this->request->getVar('txtIdPlan'),
        'cliente_id'=>$this->request->getVar('txtIdCliente'),
    ];
    print_r($datos);

    $lineas->update($datos['no_telefono'],$datos);
    return redirect()->route('lineas');
}

    public function nuevalinea(): string
    {
        return view('form_agregar_lineas');
    }


    public function agregarLinea() 
    {
        $no_telefono = $this->request->getVar('txtNoTelefono');
        //echo "<br>Id = ". $id;
        $fecha_pago=$this->request->getVar('txtFecha');
        //echo "<br>nombre = ". $nombre;
        $meses = $this->request->getVar('txtMeses');
        //echo "<br>Pago =". $pago;
        $plan_id = $this->request->getVar('txtIdPlan');
        //echo "<br>Minutos = ". $minutos;
        $cliente_id = $this->request->getvar('txtIdCliente');
        //echo "<br>Mensajes = ". $mensajes;

        $lineas = new LineasTelefonicasModel();
        $datos = [
            'no_telefono' => $no_telefono,
            'fecha_pago' =>$fecha_pago,
            'meses_atraso' => $meses,
            'plan_id' => $plan_id,
            'cliente_id' => $cliente_id,
        ];
        $lineas->insert($datos);
        return redirect()->route('lineas');
    }
}