<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembelian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pembelian'=>[
                'type'=>'BIGINT',
                'constraint'=>20,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
            ],
            'id_pembeli'=>[
                'type'=>'BIGINT',
                'constraint'=>20,
                'unsigned'=>TRUE,
             
            ],
            'id_barang'=>[
                'type'=>'BIGINT',
                'constraint'=>20,
                'unsigned'=>TRUE,
              
            ],
            'jumlah'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'total_harga'=>[
                'type'=>'FLOAT',
                'constraint'=>20,
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
            $this->forge->addKey('id_pembelian', TRUE);
            $this->forge->addForeignKey('id_pembeli','tb_user','id_user');
            $this->forge->addForeignKey('id_barang','tb_barang','id_barang');
            $this->forge->createTable('tb_pembelian');
    }

    public function down()
    {
        $this->forge->dropTable('tb_pembelian');
    }
}
