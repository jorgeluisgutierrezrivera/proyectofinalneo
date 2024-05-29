<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class Usuarios extends BaseController{
    public function show($ci_usu) {
        $usuariosModel = new UsuariosModel();
        //var_dump(['nombre_usu']);
        echo view('usuarios/show',[
            'usuarios' => $usuariosModel->find($ci_usu)
        ]);
    
    }
    public function new() {
        echo view('usuarios/new',[
            'usuarios'=>[
                'ci_usu' => '',
                'nombre_usu' => '',
                'apellido_usu' => '',
                'direccion_usu' => '',
                'correo_usu' => '',
                'contrasena_usu' => '',
                'telefono_usu' => '',
            ]
        ]);
    }

    public function create(){
        $usuariosModel = new UsuariosModel();
        $usuariosModel->insert([
            'ci_usu'=>$this->request->getPost('ci_usu'),
            'nombre_usu'=>$this->request->getPost('nombre_usu'),
            'apellido_usu'=>$this->request->getPost('apellido_usu'),
            'direccion_usu'=>$this->request->getPost('direccion_usu'),
            'correo_usu'=>$this->request->getPost('correo_usu'),
            'contrasena_usu'=>$this->request->getPost('contrasena_usu'),
            'telefono_usu'=>$this->request->getPost('telefono_usu')
        ]);

        echo 'creado';

    }

    public function edit($ci_usu){
        $usuariosModel = new UsuariosModel();
        echo view('usuarios/edit', [
            'usuarios'=>$usuariosModel->find($ci_usu)
        ]);


    }

    public function update ($ci_usu){
        $usuariosModel = new UsuariosModel();
        $usuariosModel->update($ci_usu,[
            'ci_usu'=>$this->request->getPost('ci_usu'),
            'nombre_usu'=>$this->request->getPost('nombre_usu'),
            'apellido_usu'=>$this->request->getPost('apellido_usu'),
            'direccion_usu'=>$this->request->getPost('direccion_usu'),
            'correo_usu'=>$this->request->getPost('correo_usu'),
            'contrasena_usu'=>$this->request->getPost('contrasena_usu'),
            'telefono_usu'=>$this->request->getPost('telefono_usu')
        ]);
        echo 'update';
    }

    public function delete($ci_usu){
        $usuariosModel = new UsuariosModel();
        $usuariosModel->delete($ci_usu);
        echo 'delete';
        
    }
   
    public function index(){
            $usuariosModel = new UsuariosModel();
            echo view('usuarios/index',[
                'usuarios' => $usuariosModel->findAll(),
            ]);
    }
}