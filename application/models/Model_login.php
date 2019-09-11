<?php 

class Model_login extends CI_Model{
	public function index($data,$table)
	{
		$this->db->insert($table,$data);
	}
}