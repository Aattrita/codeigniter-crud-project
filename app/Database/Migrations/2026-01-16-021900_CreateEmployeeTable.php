<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmployeeTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment'=> true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' =>  100
            ],
            'address' => [
                'type' => 'text'
            ],
            'designation' => [
                'type' => 'VARCHAR',
                'constraint' => 50   
            ],
            'salary' => [
                'type' => 'INT',
                'constraint' => 10
            ],
            'picture' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('emp_details');
    }

    public function down()
    {
        //
    }
}
