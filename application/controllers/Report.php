<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	
    public function __construct() {
        parent::__construct();

		$this->load->model('Report_model');
		cek_login();

    }

	public function index()
	{
		$data = [
			'judul' => 'Ticketing Pertamina',
			'subjudul' => 'Laporan Ticket',
			'isidata' => $this->Report_model->repTicket()
		];
        $this->template->load('pages/index','hist/v_history',$data);
    }


}