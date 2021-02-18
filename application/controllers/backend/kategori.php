<?php 
/**
  * 
  */
 class kategori extends CI_Controller
 {
 	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kategori');

		if ($this->session->userdata('login') == false){
			redirect('login');
		}
	}
 	public function add_kategori()
	{
		$data['judul'] = 'Tambah Data Kategori';
		$data['halaman'] = 'data_obat/v_add_kategori';
		$this->load->view('template', $data);
	}
	public function proses_add()
	{
		$this->form_validation->set_rules('kategori','kategori','required');

		if ($this->form_validation->run() == false){
			$this->add_kategori();
		} else {

		$object= array(
			'kategori'=> $this->input->post('kategori'),
		);
		$this->m_kategori->tambah($object);
		redirect('backend/dashboard/data_obat/data_obat');
	}
	}
 } ?>