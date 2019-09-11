<?php 

class Admin extends CI_controller{
	public function index()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/navbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/index');
		$this->load->view('templates_admin/footer');
	}
}