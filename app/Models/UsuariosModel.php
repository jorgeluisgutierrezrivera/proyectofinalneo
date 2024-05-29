<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'ci_usu';
    protected $allowedFields    = ['ci_usu','nombre_usu','apellido_usu','direccion_usu','correo_usu','contrasena_usu','telefono_usu'];
    //protected $returnType = 'object';


}
