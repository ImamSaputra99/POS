<?php 

class Auth extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()

	{
		$this->form_validation->set_rules('email','Email','required|trim|valid_email',[
			'valid_email' => 'Email tidak valid',
			'required' => 'Mohon diisi !'
		]);
		$this->form_validation->set_rules('password','Password','required|trim');

		if($this->form_validation->run() == false){
		$data['title'] = 'Login';
		$this->load->view('templates_auth/header',$data);
		$this->load->view('auth/login');
		$this->load->view('templates_auth/footer');
		}else{
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user',['email' => $email])->row_array();

		if($user)
			if($user['is_active'] == 1){
				if(password_verify($password,$user['password'])){

					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if($user['role_id'] == 1){
						redirect('admin');
					}else{
						redirect('kasir');
					}
				}else{
					$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
											 Password salah !
											</div>');
					redirect('auth');
				}
			}else{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
											 Email tak terdaftar !
											</div>');
				redirect('auth');
				
			}
	}

	public function registrasi()
	{
		$this->form_validation->set_rules('name','Name','required',[
			'required' => 'Mohon Diisi !']);
		$this->form_validation->set_rules('email','Email','required|trim|valid_email',[
			'required' => 'Mohon Diisi !']);
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[3]',[
			'min_length' => 'Password terlalu pendek!',
			'required' => 'Mohon diisi !'
		]);
		$this->form_validation->set_rules('password2','Password','required|trim|min_length[3]|matches[password1]',[
			'min_length' => 'Password terlalu pendek!',
			'matches'  => 'Password Tidak sama !',
			'required' => 'Mohon diisi !'
		]);

		if ($this->form_validation->run() == false){

		$data['title'] = 'Registrasi';
		$this->load->view('templates_auth/header',$data);
		$this->load->view('auth/register');
		$this->load->view('templates_auth/footer');
		}else{
			$data = [
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 1,
				'is_active' => 1,
				'date_created' => time()
			];
			$this->Model_login->index($data,'user');
			$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
											 Succesfull your account has ben registered
											</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('pesan','<div class="alert alert-info" role="alert">
											Berhasil logout
											</div>');
			redirect('auth');
	}
}