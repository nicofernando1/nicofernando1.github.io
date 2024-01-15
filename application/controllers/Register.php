<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct() {
        parent::__construct();

		$this->load->library('form_validation');

		$this->load->model('Register_model');
	}

	public function index()
	{
		$data = [
			'judul' => 'Ticketing Pertamina',
			'subjudul' => 'Ticper'
		];
        $this->load->view('log/v_register',$data);
	}

	public function on_register()
	{

		$this->form_validation->set_rules('name','Name','required|trim|min_length[5]|max_length[18]');
		$this->form_validation->set_rules('username','Username','required|trim|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[users.email]',[
			'is_unique' => 'Email has been regist'
		]);
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[5]|matches[password2]',[
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

		if( $this->form_validation->run() == false){
			$data = [
				'judul' => 'Ticketing Pertamina',
				'subjudul' => 'Ticper'
			];
			$this->load->view('log/v_register',$data);
		}
		else {
			if(isset($_POST['daftar'])){
			$data = [
				'name' => htmlspecialchars($this->input->post('name',true)), 
				'username' => htmlspecialchars($this->input->post('username',true)), 
				'email' => htmlspecialchars($this->input->post('email',true)), 
				'password' => password_hash($this->input->post('password1'),
				PASSWORD_DEFAULT), 
				'image' => 'default.jpg', 
				'level_user' => 3 , 
				'status_user' => 3
			];


			$this->Register_model->insertRegister($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Berhasil membuat akun</div>');
			redirect('auth');
		 	}
		 }
	}
}

