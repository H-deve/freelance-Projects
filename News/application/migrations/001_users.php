<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_users extends CI_Migration {

	public function up()
	{
		$this->load->database();
		$this->dbforge->add_field(array(
			'sec_id' => array(
				'type'=>'int',
				'constraint'=>11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'sec_name_en' => array(
				'type'=>'varchar',
				'constraint'=>40,
			),
			'sec_name_ar' => array(
				'type'=>'varchar',
				'constraint'=>40,
			),
		
		)); 	  
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('section',TRUE);
//===================================================================================
		$this->dbforge->add_field(array(
			'g_id' => array(
				'type'=>'int',
				'constraint'=>11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'g_name' => array(
				'type'=>'varchar',
				'constraint'=>40,
			)
		));
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('group',TRUE);
//===================================================================================

$this->dbforge->add_field(array(
			'sec_file_id' => array(
				'type'=>'int',
				'constraint'=>11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'sec_file_name' => array(
				'type'=>'varchar',
				'constraint'=>40,
			)
			
		));
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('sec_files',TRUE);
//===================================================================================
		$this->dbforge->add_field(array(
				'id' => array(
				'type'=>'int',
				'constraint'=>11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type'=>'varchar',
				'constraint'=>255,
			),
			'description' => array(
				'type'=>'text',
				
				),
			'phone' => array(
				'type'=>'varchar',
				'constraint'=>255,
			),
			'email' => array(
				'type'=>'varchar',
				'constraint'=>255,
			),
			)); 	  
		$this->dbforge->create_table('company_information',TRUE);
//===================================================================================

//===================================================================================
}

	public function down()
	{
		$this->dbforge->drop_table('user');
		$this->dbforge->drop_table('group');
		$this->dbforge->drop_table('permition');
	
	}
}