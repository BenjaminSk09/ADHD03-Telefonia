<?php

namespace App\Controllers;
use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    public function index(): string
    {
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->findAll();
        return view('clientes',$datos);
    }

    public function eliminarClientes($cliente_id =null)
    {
        $clientes = new ClientesModel();
        $clientes->where('cliente_id',$cliente_id)->delete();
        return redirect()->route('clientes'); 
    }

    public function buscarClientes($cliente_id =null)
    {
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->where('cliente_id',$cliente_id)->first();
        return view('form_modificar_clientes',$datos);
    }

    public function modificarClientes()
    {
        $clientes = new ClientesModel();
        //datos del formulario
        $datos = [
            'cliente_id' => $this->request->getVar('txtClienteId'),
            'apellido' => $this->request->getVar('txtApellido'),
            'nombre' => $this->request->getVar('txtNombre'),
            'correo_electronico'=>$this->request->getVar('txtCorreo'),
            'calle_avenida'=>$this->request->getVar('txtCalle'),
            'no_casa'=>$this->request->getVar('txtNoCasa'),
            'zona'=>$this->request->getVar('txtZona'),
            // Otros campos del formulario
        ];
        // Actualizar los datos del cliente en la base de datos
        $clientes->update($datos['cliente_id'], $datos);
        return redirect()->route('clientes');
    }

    public function nuevoCliente(): string
    {
        return view('form_agregar_clientes');  
    }
 
    public function agregarCLiente()
    {
        $cliente_id = $this->request->getVar('txtClienteId');
        $apellido = $this->request->getVar('txtApellido');
        $nombre = $this->request->getVar('txtNombre');
        $correo = $this->request->getVar('txtCorreo');
        $calle = $this->request->getVar('txtCalle');
        $casa = $this->request->getVar('txtNoCasa');
        $zona = $this->request->getVAR('txtZona');

        $clientes = new ClientesModel();
        $datos = [
            'cliente_id' => $cliente_id,
            'apellido' =>$apellido,
            'nombre' => $nombre,
            'correo_electronico' => $correo,
            'calle_avenida' => $calle,
            'no_casa' => $casa,
            'zona' => $zona,
        ];
        
        $clientes->insert($datos);
        return redirect()->route('clientes');
    }
}