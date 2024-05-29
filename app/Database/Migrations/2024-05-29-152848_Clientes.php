<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clientes extends Migration
{
    public function up()
    {
        $this->forge->addField([
                'ci_cli'=>[
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'auto_increment' => FALSE,
                ],
                'nombre_cli'=>[
                    'type' => 'VARCHAR',
                    'constraint' => 200,
                ],
                'apellido_cli'=>[
                    'type' => 'VARCHAR',
                    'constraint' => 200,
                ],
                'direccion_cli'=>[
                    'type' => 'VARCHAR',
                    'constraint' => 200,
                ],
                'celular_cli'=>[
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ],
                'correo_cli'=>[
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ],
            ]);
            $this->forge->addKey('ci_cli',TRUE);
            $this->forge->createTable('clientes');
    }

    public function down()
    {
        $this->forge->dropTable('clientes');

    }
}
