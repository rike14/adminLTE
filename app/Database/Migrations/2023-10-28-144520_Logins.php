<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Logins extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_login' => [
                'type' => 'INT',
                'constraint' => 9,
                'usigned' => true,
                'auto_increment' => true,
            ],
            'user' => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],
            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => 128
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
        $this->forge->addKey('id_login', true);
        $this->forge->createTable('logins');
    }

    public function down()
    {
        $this->forge->dropTable('logins');
    }
}
