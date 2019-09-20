<?php 

class Model_data extends CI_Model{
	public function get()
	{
		return $this->db->get('user');
		
	}

	public function edit($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
} 