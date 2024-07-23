<?php

namespace App\Controllers;
use App\Models\PlanesModel;

class PlanesController extends BaseController
{
    public function index(): string
    {
        $planes = new PlanesModel(); //crear objeto
        $datos['datos']=$planes->findAll(); //Select * from planes; es un array
       // print_r($datos); //si esta correcto se van a mostrar los datos en un array en la pagina web
        return view('planes',$datos);
    }
    //Metodo de Eliminar (importante definir desde el principio la PrimaryKey en los Modelos)
    public function eliminarPlan($id=null){
        //echo "id o codigo:".$id; sirve para ver si funciona el boton
        $planes = new PlanesModel();
        $planes->delete($id);
        return redirect()->route('planes');
    }
    //metodo para Actualizar el plan
    public function buscarPlan($id=null){
      //  echo "codigo".$id;
      $planes = new PlanesModel();
      //select * from planes where plan_id = $id;
      $datos['datos']=$planes->where('plan_id', $id)->first();
      //print_r($datos);
      return view('form_modificar_plan',$datos);
    }
    //metodo para modificar el Plan
    public function modificarPlan(){
        $datos=[
            'plan_id'=>$this->request->getVar('txtPlanId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'pago_mensual'=>$this->request->getVar('txtPago'),
            'cantidad_minutos'=>$this->request->getVar('txtMinutos'),
            'cantidad_mensajes'=>$this->request->getVar('txtMensajes'),
        ];
        //print_r($datos);
        $planes = new PlanesModel();
        //update Plances Set(los modifica nombre, pago etc) where Plan_id=#
        //update(primaryKey, campos y datos) version resumida
        $planes->update($datos['plan_id'],$datos);
        return redirect()->route('planes');
    }
    
}
