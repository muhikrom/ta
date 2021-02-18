<?php 
/**
  * 
  */
 class satuan extends CI_Controller
 {
 	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_satuan');

		if ($this->session->userdata('login') == false){
			redirect('login');
		}
	}
 	public function add_satuan()
	{
		$data['judul'] = 'Tambah Data Satuan';
		$data['halaman'] = 'data_obat/v_add_satuan';
		$this->load->view('template', $data);
	}
	public function proses_add()
	{
		$this->form_validation->set_rules('satuan','satuan','required');

		if ($this->form_validation->run() == false){
			$this->add_satuan();
		} else {

		$object= array(
			'satuan'=> $this->input->post('satuan'),
		);
		$this->m_satuan->tambah($object);
		redirect('backend/dashboard/data_obat/data_obat');
	}
	}
 } ?>