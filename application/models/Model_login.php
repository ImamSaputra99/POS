<?php 

class Model_login extends CI_Model{
	public function index($data,$table)
	{
	return $this->db->insert($table,$data);
	}
	
}