<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataticket extends CI_Controller {
	
    public function __construct() {
        parent::__construct();

		$this->load->model('Ticket_model');
		cek_login();

    }

		
	public function index() 
	{

		// $vie = $this->session->userdata('id_user');

		$data = [
			'judul' => 'Data Ticket',
			'subjudul' => 'Overview Ticket',
			'isidata' => $this->Ticket_model->viewtick()->result(),
            'isi' => $this->Ticket_model->ticketOverview()->num_rows()
		];

        $config['base_url'] = base_url().'/dataticket/index';
        $config['total_rows'] = $data['isi'];
        $config['per_page'] = 2;


		//styleling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);


        $data['pagination'] = $this->pagination->create_links();
		$data['start'] = $this->uri->segment(3);
		$data['datas'] = $this->Ticket_model->getInfo($config['per_page'],$data['start']);
       


		$this->template->load('pages/index','v_tickets',$data);
	}
	
	public function admin() 
	{

		$vie = $this->session->userdata('id_user');

		$data = [
			'judul' => 'Data Ticket',
			'subjudul' => 'Overview Ticket',
			'isidata' => $this->Ticket_model->detailTicket()->result(),
            'isi' => $this->Ticket_model->ticketOverview()->num_rows()
		];

        $config['base_url'] = base_url().'/dataticket/admin';
        $config['total_rows'] = $data['isi'];
        $config['per_page'] = 2;


		//styleling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);


        $data['pagination'] = $this->pagination->create_links();
		$data['start'] = $this->uri->segment(3);
		$data['datas'] = $this->Ticket_model->getInfo($config['per_page'],$data['start']);
       


		$this->template->load('pages/index','v_ticket',$data);
	}

	public function reporter()
	{

		$vie = $this->session->userdata('id_user');

		$data = [
			'judul' => 'Data Ticket',
			'subjudul' => 'Overview Ticket',
			'isidata' => $this->Ticket_model->ticketbyid($vie)->result(),
            'isi' => $this->Ticket_model->ticketOverview()->num_rows()
		];

        $config['base_url'] = base_url().'/dataticket/reporter';
        $config['total_rows'] = $data['isi'];
        $config['per_page'] = 2;


		//styleling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);


        $data['pagination'] = $this->pagination->create_links();
		$data['start'] = $this->uri->segment(3);
		$data['datas'] = $this->Ticket_model->getInfo($config['per_page'],$data['start']);
       


		$this->template->load('pages/index','v_ticketsreport',$data);
	}

	public function detailticket($dt)
	{	
	 	$data = [
	 		'judul' => 'Data Ticket',
	 		'subjudul' => 'Detail Ticket',
			'reason' => 'Detail Masalah',
	 		'isidata' => $this->Ticket_model->tampilTicket($dt)->row()
	 	];
	 	$this->template->load('pages/index','v_detailsTicket',$data);
	}

	public function detailticketAdm($dt)
	{	
	 	$data = [
	 		'judul' => 'Data Ticket',
	 		'subjudul' => 'Detail Ticket',
			'reason' => 'Detail Masalah',
	 		'isidata' => $this->Ticket_model->tampilTicket($dt)->row()
	 	];
	 	$this->template->load('pages/index','v_detailsTicketAdm',$data);
	}
	

}