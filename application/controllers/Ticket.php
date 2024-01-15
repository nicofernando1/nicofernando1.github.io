<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {
	
    public function __construct() {
        parent::__construct();

		$this->load->model('Ticket_model');
		cek_login();

    }

	public function index()
	{
		$data = [
			'judul' => 'Ticketing Pertamina',
			'subjudul' => 'Ticper',
			'isidata' => $this->Ticket_model->detailTicket()->result(),
			'req' => $this->Ticket_model->getAllreq(),
			'ass' => $this->Ticket_model->getAllassi(),
			'pro' => $this->Ticket_model->getAllpro(),
			'pen' => $this->Ticket_model->getAllpen(),
			'reso' => $this->Ticket_model->getAllres(),
			'reject' =>	$this->Ticket_model->getAllrej()
		];
		

        $this->template->load('pages/index','v_home',$data);
	}

	
	
	// public function overview() 
	// {
	// 	$data = [
	// 		'judul' => 'Data Ticket',
	// 		'subjudul' => 'Overview Ticket',
	// 		'isidata' => $this->Ticket_model->ticketOverview()->result()
	// 	];
		
	// 	$this->template->load('pages/index','v_ticket',$data);
	// }
	
	// public function dataticket($dt)
	// {	
	//  	$data = [
	//  		'judul' => 'Data Ticket',
	//  		'subjudul' => 'Detail Ticket',
	// 		'reason' => 'Detail Masalah',
	//  		'isidata' => $this->Ticket_model->tampilTicket($dt)->row()
	//  	];
	//  	$this->template->load('pages/index','v_detailsTicket',$data);
	// }
	
	public function ticketreq() 
	{
		$iduser['user'] = $this->db->get_where('users',['email' => 
		$this->session->userdata('email')])->row_array();

		$docs = $this->uploadDocumentation();
		
		if (isset($_POST['simpan'])) {
			$data = [
				'No_Ticket' => $this->input->post('noTicket'),
				'Id_Ticket' => $this->input->post('idTicket'),
				'User' => $this->input->post('user'),
				'Pic' => $this->input->post('pic'),
				'Departemen' => $this->input->post('departemen'),
				'lokasi' => $this->input->post('location'),
				'user_id' => $iduser['user']['id_user'],
				'Topic' => $this->input->post('topic'),
				'Uraianmasalah' => $this->input->post('uraianMasalah'),
				'status' => 'Request',
				'Documentation' => $docs['file_name'],
			];

			$this->Ticket_model->addTicket($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-info"> Ticket Berhasil direquest</div>');
			redirect('ticket/ticketreq');
		}

		$data =[
			'judul' => 'Form Ticket',
			'subjudul' => 'Ticket Request',
			'stat' => 'Request',
			'isidata' => $this->Ticket_model->getData()->result(),
			'isiloc' => $this->Ticket_model->getStatus()->result()
		];
	 	$this->template->load('pages/index','v_ticketreq',$data);
	}
		 
	 public function ticketing()
	 {

		// $vie = $this->session->userdata('id_user');

		$data =[
			'judul' =>'Ticket',
			'subjudul' => 'Tickets',
			'isidata' => $this->Ticket_model->detailTicket()->result(),
			// 'isidata' => $this->Ticket_model->viewtick($vie)->result(),
			'req' => $this->Ticket_model->getAllreq(),
			'isi' => $this->Ticket_model->detailTicket()->num_rows()
		];
	

		$config['base_url'] = base_url().'/ticket/ticketing';
        $config['total_rows'] = $data['isi'];
        $config['per_page'] = 5;


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

	 	$this->template->load('pages/index','v_ticketing',$data);
	 }

	public function reporttick()
	 {

		$vie = $this->session->userdata('id_user');

		$data =[
			'judul' =>'Ticket',
			'subjudul' => 'Tickets',
			// 'isidata' => $this->Ticket_model->detailTicket()->result(),
			'isidata' => $this->Ticket_model->ticketbyid($vie)->result(),
			'req' => $this->Ticket_model->getAllreq(),
			'isi' => $this->Ticket_model->detailTicket()->num_rows()
		];
	

		$config['base_url'] = base_url().'/ticket/reporttick';
        $config['total_rows'] = $data['isi'];
        $config['per_page'] = 5;


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

	 	$this->template->load('pages/index','v_ticketingreport',$data);
	 }

	 public function admin()
	 {

		$vie = $this->session->userdata('id_user');

		$data =[
			'judul' =>'Ticket',
			'subjudul' => 'Tickets',
			'isidata' => $this->Ticket_model->detailTicket()->result(),
			// 'isidata' => $this->Ticket_model->viewtick($vie)->result(),
			'isi' => $this->Ticket_model->detailTicket()->num_rows()
		];

		$config['base_url'] = base_url().'/ticket/admin';
        $config['total_rows'] = $data['isi'];
        $config['per_page'] = 5;


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

	 	$this->template->load('pages/index','v_ticketingadmin',$data);
	 }

	 public function delete($dt)
	 {
		$this->Ticket_model->deleteTicket($dt);
		$this->session->set_flashdata('pesan','<div class="alert alert-danger">Ticket Berhasil Dihapus</div>');
		redirect('ticket/ticketing');
	 }

	 public function update($dt)
	 {
		//proses edit
		$docs = $this->uploadDocumentation();

		if(isset($_POST['ubah'])) {
			$data = [
				'User' => $this->input->post('users'),
				'Pic' => $this->input->post('pic'),
				'Departemen' => $this->input->post('departemen'),
				'Topic' => $this->input->post('topic'),
				'lokasi' => $this->input->post('location'),
				'Tanggal_selesai' => $this->input->post('tanggalselesai'),
				'status' => $this->input->post('statu'),
				'Uraianmasalah' => $this->input->post('description'),
				'uraianprogress' => $this->input->post('uraianpekerjaan'),
				'Documentation' => $docs['file_name'],
			];
			$this->Ticket_model->updateTicket($dt,$data);
			$this->session->set_flashdata('pesan','<div class="alert alert-info"> Ticket Berhasil diubah</div>');
			redirect('dataticket');

		}

		$data =[
			'judul' =>'Ubah Data Ticket',
			'subjudul' => 'Detail masalah',
			'isidata' => $this->Ticket_model->tampilTicket($dt)->row(),
			'isiloc' => $this->Ticket_model->getStatus()->result()
		];
	 	$this->template->load('pages/index','detect/v_updateTickets',$data);

	 }
	 public function updateAdm($dt)
	 {
		//proses edit
		$docs = $this->uploadDocumentation();

		if(isset($_POST['ubah'])) {
			$data = [
				'User' => $this->input->post('users'),
				'Pic' => $this->input->post('pic'),
				'Departemen' => $this->input->post('departemen'),
				'Topic' => $this->input->post('topic'),
				'lokasi' => $this->input->post('location'),
				'Tanggal_selesai' => $this->input->post('tanggalselesai'),
				'status' => $this->input->post('statu'),
				'Uraianmasalah' => $this->input->post('description'),
				'uraianprogress' => $this->input->post('uraianpekerjaan'),
				'Documentation' => $docs['file_name'],
			];
			$this->Ticket_model->updateTicket($dt,$data);
			$this->session->set_flashdata('pesan','<div class="alert alert-info"> Ticket Berhasil diubah</div>');
			redirect('dataticket');

		}

		$data =[
			'judul' =>'Ubah Data Ticket',
			'subjudul' => 'Detail masalah',
			'isidata' => $this->Ticket_model->tampilTicket($dt)->row(),
			'isiloc' => $this->Ticket_model->getStatus()->result()
		];
	 	$this->template->load('pages/index','detect/v_updateTicket',$data);

	 }


	// public function history()
	// {
	// 	$data =[
	// 		'judul' => 'asdad'
	// 	];
	// $this->template->load('pages/index','v_history',$data);
	// }

	public function uploadDocumentation() 
	{
		$config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;

		$this->load->library('upload', $config);

		if ( $this->upload->do_upload('documentation'))
		{
			return $this->upload->data();

		}
		else
		{
			$error = array('error' => $this->upload->display_errors());

		}

	}

	// public function downloadFile($id) {
	// 	if(!empty($id)){
	// 		$this->load->helper('download');
	// 		$fileInfo = $this->file->getRows(array());
	// 		$file = 'assets/uploads/'.$fileInfo['file_name'];
	// 		force_download($file,NULL);
	// 	}

	// }


	public function downloadDocs($id)
	{
		$this->load->helper('download');
		$filedata = $this->db->query("SELECT * FROM ticket WHERE Id_Ticket='$id'");
		foreach($filedata->result() as $data_foto) {
			$file = 'assets/uploads/'.$data_foto->Documentation.$data_foto->file_name;
			force_download($file,NULL);
		}
	}

}