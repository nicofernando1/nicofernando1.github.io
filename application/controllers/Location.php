<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {
	
    public function __construct() {
        parent::__construct();

		$this->load->model('Location_model');
		cek_login();
    }

	public function index()
	{
		$data =[
			'judul' =>'Location',
			'subjudul' => 'Add location',
			'isidata' => $this->Location_model->getLoca()->result(),
			'isiloc' => $this->Location_model->getLoca()->num_rows()
		];


		// $data['jmlhmn'] = $this->Location_model->getLoca()->num_rows();
		//config pagination 
		$config['base_url'] = base_url().'/location/index';
		$config['total_rows'] = $data['isiloc']; //jumlah data table
		$config['per_page'] = 2;
		$config['num_links'] = 3;
		
		//styleling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
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
		$data['datas'] = $this->Location_model->getData($config['per_page'],$data['start']);
		


	 	$this->template->load('pages/index','locs/v_location',$data);
    }

	public function detail($dd)
	{
		$data = [
			'judul' => 'Detail Location',
			'subjudul' => 'Location',
			'isidata' => $this->Location_model->detailLocation($dd)->row()
		];
		$this->template->load('pages/index','locs/v_detailLocation',$data);
	}

    public function addLoc()
	{

		if (isset($_POST['kirim'])) {
			$data = [
				'id_location' => $this->input->post('idLok'),
				'name_location' => $this->input->post('lokas'),
			];
			$this->Location_model->addLocati($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success"> Berhasil Menambahkan Lokasi</div>');
			redirect('location');

		}

		$data =[
			'judul' => 'location',
			'subjudul' => 'oiw',
		];
		$this->template->load('pages/index','locs/v_addLocation',$data);
	}

    public function edit($dd)
    {
        //proses edit
        if (isset($_POST['ubah'])) {
			$data = [
				'id_location' => $this->input->post('idLok'),
				'name_location' => $this->input->post('lokas'),
			];
			$this->Location_model->editLoc($dd,$data);
			$this->session->set_flashdata('pesan','<div class="alert alert-info"> Berhasil Edit Lokasi</div>');
			redirect('location');
		}

        //batas edit
		$data =[
			'judul' => 'Edit Lokasi',
			'subjudul' => 'Lokasi',
			'isidata' => $this->Location_model->detailLocation($dd)->row()
            
		];
		$this->template->load('pages/index','locs/v_editLocation',$data);
        
    }

    public function delete($dd)
    {
        $this->Location_model->deleteData($dd);
        $this->session->set_flashdata('pesan','<div class="alert alert-danger"> Data Berhasil Hapus</div>');
        redirect('location');
    }

	public function update()
	{
		$data =[
			'judul' => 'Edadsa',
			'subjudul' => 'asdasa',
		];
		$this->template->load('pages/index','detect/v_updateTicket',$data);
	}

}