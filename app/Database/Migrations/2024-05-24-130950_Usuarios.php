<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ci_usu' =>[
                'type' => 'INT',
                'constraint' =>10,
                'unsigned' =>TRUE,
                'auto_increment' =>FALSE,
            ],

            'nombre_usu' =>[
                'type' => 'VARCHAR',
                'constraint' =>50,
            ],
            
            'apellido_usu' =>[
                'type' => 'VARCHAR',
                'constraint' =>50,
            ],

            'direccion_usu' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],

            'correo_usu' =>[
                'type' => 'VARCHAR',
                'constraint' =>50,
            ],

            'contrasena_usu' =>[
                'type' => 'VARCHAR',
                'constraint' =>50,
            ],

            'telefono_usu' =>[
                'type' => 'INT',
                'constraint' =>10,
                'unsigned' =>TRUE,
                'auto_increment' =>FALSE,
            ],

            'tipo_usu' => [
                'type'       => 'ENUM',
                'constraint' => ['admin','atenalclien','dj','montaje','supervisor', 'mc'],
                'default' => 'admin',
            ],



        ]);

        $this->forge->addKey('ci_usu');
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
