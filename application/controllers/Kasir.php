<?php 

class Kasir extends CI_Controller{
	public function index()
	{
		
		$data['title'] = 'Kasir';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/navbar',$data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('kasir/index');
		$this->load->view('templates_admin/footer');
	}
}
 
