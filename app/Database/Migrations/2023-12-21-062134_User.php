<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user'=>[
                'type'=>'BIGINT',
                'constraint'=>20,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
            ],
            'username'=>[
                'type'=>'VARCHAR',
                'constraint'=>'100',
            ],
            'password'=>[
                'type'=>'TEXT',
            ],
            'salt'=>[
                'type'=>'TEXT',
            ],
            'avatar'=>[
                'type'=>'TEXT',
            ],
            'role'=>[
                'type'=>'INT',
                'constraint'=>1,
                'default'=>1
            ],
            'created_by'=>[
                'type'=>'INT',
                'constraint'=>11
            ],
            'created_at'=>[
                'type'=>'DATETIME',
            ],
            'updated_by'=>[
                'type'=>'INT',
                'constraint'=>11,
                'null'=>TRUE
            ],
            'updated_at'=>[
                'type'=>'DATETIME',
            ],
            'deleted_at'=>[
                'type'=>'INT',
                'constraint'=>11
            ],
            'deleted_at'=>[
                'type'=>'DATETIME',
            ]
            ]);
            $this->forge->addKey('id_user', TRUE);
            $this->forge->createTable('tb_user');
    }

    public function down()
    {
        $this->forge->dropTable('tb_user');
    }
}
