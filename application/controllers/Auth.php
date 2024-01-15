<?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct() 
	{
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('Auth_model');
	}

	public function index()
	{
		$data =[
			'judul' =>'Aplikasi Ticketing Pertamina',
			'subjudul' => 'Pertamina'

		]; 


        $this->load->view('log/v_authlogin',$data);
	}

	public function on_login()
	{

		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('password1','Password','required|trim');

		$data = [
			'judul'=> 'Pertamina'
		];

		$this->load->view('log/v_authlogin', $data);

		if ($this->form_validation->run() == false) {
			$data =[
				'judul' => 'Login Ulang'
			];
			$this->load->view('log/v_authlogin',$data);
			redirect('auth');
		} else {
			$this-> _login();
		}

	}

	private function _login()
	{	
		$email = $this->input->post('email');
		$password = $this->input->post('password1');

		$users = $this->Auth_model->cek($email)->row_array();
		

		if($users) {
			//user ada
			if($users['status_user'] == 1) {
				if(password_verify($password,$users['password'])){
					$data = [
						'email' => $users['email'],
						'level_user' => $users['level_user'],
						'id_user'  => $users['id_user'],
						'username' => $users['username'],
						'name' => $users['name'],
						'status_user' => $users['status_user'],
 					];
					$this->session->set_userdata($data);
					redirect('dataticket');
				}
			}
			elseif($users['status_user'] == 2){
				if(password_verify($password,$users['password'])){
					$data = [
						'email' => $users['email'],
						'id_user'  => $users['id_user'],
						'username' => $users['username'],
						'name' => $users['name'],
						'level_user' => $users['level_user'],
						'status_user' => $users['status_user'],
					];
					$this->session->set_userdata($data);
					redirect('ticket');
				}
			}
			elseif($users['status_user'] == 3){
				if(password_verify($password,$users['password'])){
					$data = [
						'email' => $users['email'],
						'id_user'  => $users['id_user'],
						'username' => $users['username'],
						'name' => $users['name'],
						'level_user' => $users['level_user'],
						'status_user' => $users['status_user'],
					];
					$this->session->set_userdata($data);
					redirect('ticket/ticketreq');
				}
			}
			
		} else {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" style="color:white; background-color:red;"> Email has not registed</div>');
			redirect('auth');
		}
		
	}

	public function proseslogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->Auth_model->ceklogin($username, $password);
		$row = $cek->row();
		$total = $cek->num_rows();

		if ($total > 0) {
			$this->session->set_userdata(
				[
					'Username' => $row->Username,
					'Name' =>$row->Name,
					'Level' =>$row->Level
				]

			);
				$this->session->set_flashdata('pesan','Login Berhasil');
				redirect('ticket');
		}
		else 
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" style="color:white; background-color:red;"> Login Gagal</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth','refresh');
	}
	

}
