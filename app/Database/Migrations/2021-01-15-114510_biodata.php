<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Biodata extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'biodata_id'            => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'first_name'           => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'last_name'              => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'dob'              => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'gender'              => [
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
			],
			'deleted_at'         => [
				'type'           => 'TIMESTAMP',
				'null'           => true,
			]
		]);
		$this->forge->addPrimaryKey('biodata_id');
		$this->forge->createTable('biodatas');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('biodatas');
	}
}
