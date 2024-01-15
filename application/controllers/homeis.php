<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() 
	{
        parent::__construct();

        $this->load->model('Auth_model');
	}

	public function index()
	{ 
		$data['user'] = $this->db->get_where('users'['email' => $this->session->userdata('email')])->row_array();
		echo 'Selamat'.$data['user']['email'];
		$this->load->view('v_home')
	}

}