<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $table            = 'clientes';
    protected $primaryKey       = 'ci_cli';
    protected $allowedFields    = ['ci_cli','nombre_cli','apellido_cli','direccion_cli','celular_cli','correo_cli'];
    //protected $returnType = 'object';


}
