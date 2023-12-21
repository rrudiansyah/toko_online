<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_barang'=>[
                'type'=>'BIGINT',
                'constraint'=>20,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
            ],
            'nama_barang'=>[
                'type'=>'VARCHAR',
                'constraint'=>'100',
            ],
            'harga_barang'=>[
                'type'=>'FLOAT',
                'constraint'=>20,
            ],
            'stok'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'gambar'=>[
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
            $this->forge->addKey('id_barang', TRUE);
            $this->forge->createTable('tb_barang');
    }

    public function down()
    {
        $this->forge->dropTable('tb_barang');
    }
}
