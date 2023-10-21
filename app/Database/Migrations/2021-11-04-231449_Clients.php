<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clients extends Migration
{
    public function up()
    {
       $this->forge->addField([
           'id_client' => [
               'type' => 'INT',
               'constraint' => 9,
               'usigned' => true,
               'auto_increment' => true,
           ],
           'name' => [
               'type' => 'VARCHAR',
               'constraint' => 128
           ],
           'date_of_birth' => [
               'type' => 'DATE'
           ],
           'CPF' => [
               'type' => 'VARCHAR',
               'constraint' =>11
           ],
           'phone' => [
               'type' => 'VARCHAR',
               'constraint' => 32
           ],
           'address' => [
               'type' => 'VARCHAR',
               'constraint' => 128
           ],
           'credit_limit' => [
               'type' => 'DOUBLE'
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
           $this->forge->addKey('id_client', true);
           $this->forge->createTable('clients');
    }

    public function down()
    {
        $this->forge->dropTable('clients');
    }
}
