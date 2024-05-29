<?php

namespace App\Controllers;

use App\Models\ClientesModel;

class clientes extends BaseController{
    public function show($ci_cli) {
        $clientesModel = new ClientesModel();
        //var_dump(['nombre_cli']);
        echo view('clientes/show',[
            'clientes' => $clientesModel->find($ci_cli)
        ]);
    
    }
    public function new() {
        echo view('clientes/new',[
            'clientes'=>[
                'ci_cli' => '',
                'nombre_cli' => '',
                'apellido_cli' => '',
                'direccion_cli' => '',
                'celular_cli' => '',
                'correo_cli' => '',
                
            ]
        ]);
    }

    public function create(){
        $clientesModel = new ClientesModel();
        $clientesModel->insert([
            'ci_cli'=>$this->request->getPost('ci_cli'),
            'nombre_cli'=>$this->request->getPost('nombre_cli'),
            'apellido_cli'=>$this->request->getPost('apellido_cli'),
            'direccion_cli'=>$this->request->getPost('direccion_cli'),
            'celular_cli'=>$this->request->getPost('celular_cli'),
            'correo_cli'=>$this->request->getPost('correo_cli')
            
            
        ]);

        echo 'creado';

    }

    public function edit($ci_cli){
        $clientesModel = new ClientesModel();
        echo view('clientes/edit', [
            'clientes'=>$clientesModel->find($ci_cli)
        ]);


    }

    public function update ($ci_cli){
        $clientesModel = new ClientesModel();
        $clientesModel->update($ci_cli,[
            'ci_cli'=>$this->request->getPost('ci_cli'),
            'nombre_cli'=>$this->request->getPost('nombre_cli'),
            'apellido_cli'=>$this->request->getPost('apellido_cli'),
            'direccion_cli'=>$this->request->getPost('direccion_cli'),
            'celular_cli'=>$this->request->getPost('celular_cli'),
            'correo_cli'=>$this->request->getPost('correo_cli'),
            
        ]);
        echo 'update';
    }

    public function delete($ci_cli){
        $clientesModel = new ClientesModel();
        $clientesModel->delete($ci_cli);
        echo 'delete';
        
    }
   
    public function index(){
            $clientesModel = new ClientesModel();
            echo view('clientes/index',[
                'clientes' => $clientesModel->findAll(),
            ]);
    }
}