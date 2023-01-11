<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contact extends Migration
{
    public function up() {
        $this->forge->addField([
        'book_id' => [
            'type' => 'INT',
            'unsigned' => TRUE,
        'auto_increment' => TRUE
        ],
        'title' => [
        'type' => 'VARCHAR',
        'constraint' => 100,
        'null' => FALSE
        ],
        'year' => [
        'type' => 'INT',
        'null' => FALSE
        ],
        'author' => [
        'type' => 'VARCHAR',
        'constraint' => 100,
        'null' => FALSE
        ],
        'publisher' => [
        'type' => 'VARCHAR',
        'constraint' => 100,
        'null' => FALSE
        ],
        'status' => [
        'type' => 'VARCHAR',
        'constraint' => 100,
        'null' => FALSE
        ],
        'price' => [
        'type' => 'INT',
        'null' => FALSE
        ]
        ]);
        $this->forge->addKey('book_id', TRUE);
        
        $this->forge->createTable('books');
        
        }
    public function down() {
        $this->forge->dropTable('books');
        
        }
}
