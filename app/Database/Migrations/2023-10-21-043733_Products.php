<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_product' => [
                'type' => 'INT',
                'constraint' => 9,
                'usigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],
            'description' => [
                'type' => 'TEXT'
            ],
            'quantity' => [
                'type' => 'INT'
            ],
            'quantity_min' => [
                'type' => 'INT'
            ],
            'price' => [
                'type' => 'DOUBLE',
            ],
            'price_sale' => [
                'type' => 'DOUBLE',
            ],
            'profit' => [
                'type' => 'DOUBLE',
            ],
            'validity' => [
                'type' => 'DATE'
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'updated_at' => [
                'type' => 'DATETIME'
            ],
            'deleted_at' => [
                'type' => 'DATETIME'
            ]
        ]);
        $this->forge->addKey('id_product', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
