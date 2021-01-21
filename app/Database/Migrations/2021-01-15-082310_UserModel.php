<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserModel extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'user_id'            => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'username'           => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'email'              => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at'         => [
				'type'           => 'TIMESTAMP',
				'null'           => true,
			],
			'updated_at'         => [
				'type'           => 'TIMESTAMP',
				'null'           => true,
			]
		]);
		$this->forge->addPrimaryKey('user_id');
		$this->forge->createTable('user');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
