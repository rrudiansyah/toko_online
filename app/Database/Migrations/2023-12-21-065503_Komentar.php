<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komentar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_komentar'=>[
                'type'=>'BIGINT',
                'constraint'=>20,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
            ],
            'id_user'=>[
                'type'=>'BIGINT',
                'constraint'=>20,
                'unsigned'=>TRUE,
             
            ],
            'id_barang'=>[
                'type'=>'BIGINT',
                'constraint'=>20,
                'unsigned'=>TRUE,
              
            ],
            'komentar'=>[
                'type'=>'TEXT',
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
            'deleted_by'=>[
                'type'=>'INT',
                'constraint'=>11
            ],
            'deleted_at'=>[
                'type'=>'DATETIME',
            ]
            ]);
            $this->forge->addKey('id_komentar', TRUE);
            $this->forge->addForeignKey('id_user','tb_user','id_user');
            $this->forge->addForeignKey('id_barang','tb_barang','id_barang');
            $this->forge->createTable('tb_komentar');
    }

    public function down()
    {
        $this->forge->dropTable('tb_komentar');
    }
}
