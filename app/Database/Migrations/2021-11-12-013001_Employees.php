<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Employees extends Migration
{
   public function up()
    {
       $this->forge->addField([
           'id_employee' => [
               'type' => 'INT',
               'constraint' => 9,
               'usigned' => true,
               'auto_increment' => true,
           ],
           'name' => [
               'type' => 'VARCHAR',
               'constraint' => 128
           ],
            'date of birth' => [
               'type' => 'DATE'
           ],
           'CPF' => [
               'type' => 'VARCHAR',
               'constraint' =>32
            
           ],
           'RG' => [
               'type' => 'VARCHAR',
               'constraint' =>32
            
           ],
           'phone' => [
               'type' => 'VARCHAR',
               'constraint' => 32
           ],
           'address' => [
               'type' => 'VARCHAR',
               'constraint' => 128
           ],
           'hiring_day' => [
               'type' => 'DATE'
           ],
           'role' => [
               'type' => 'VARCHAR',
               'constraint' => 128
           ],
           'salary' => [
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
           $this->forge->addKey('id_employee', true);
           $this->forge->createTable('employees');
    }

    public function down()
    {
        $this->forge->dropTable('employees');
    }
}
