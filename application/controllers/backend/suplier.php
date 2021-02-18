<?php 
/**
  * 
  */
 class suplier extends CI_Controller
 {
 	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_suplier');
		$this->load->model('m_obat_masuk');

		if ($this->session->userdata('login') == false){
			redirect('login');
		}
	}
 	public function index_suplier ()
 	{
 		$data['judul'] = 'Data Obat Keluar';
		$data['halaman'] = 'data_suplier/data_suplier';
		$data['isi_suplier'] = $this->m_suplier->getALL();
		$this->load->view('template', $data);
 	}
 	public function add_suplier()
	{
		$data['judul'] = 'Tambah Data Suplier';
		$data['halaman'] = 'data_suplier/v_add';
		$this->load->view('template', $data);
	}
	public function proses_addout()
	{
		$this->form_validation->set_rules('nama_suplier','nama suplier','required');
		$this->form_validation->set_rules('alamat_suplier','Alamat Suplier','required');
		$this->form_validation->set_rules('kota_suplier','kota suplier','required');
		$this->form_validation->set_rules('telepon_suplier','telepon suplier','required');

		if ($this->form_validation->run() == false){
			$this->add_suplier();
		} else {

		$object= array(
			'nama_suplier'=> $this->input->post('nama_suplier'),
			'alamat_suplier'=> $this->input->post('alamat_suplier'),
			'kota_suplier'=> $this->input->post('kota_suplier'),
			'telepon_suplier'=> $this->input->post('telepon_suplier'),
		);
		$this->m_suplier->tambah($object);
		redirect('backend/suplier/index_suplier/data_suplier');
	}
	}
	public function edit($kd_suplier)
	{

		$this->db->where('kd_suplier', $kd_suplier);
		$data_table= $this->db->get('tbl_suplier')->row();

		$data['judul']= 'Ubah Data Suplier';
		$data['halaman'] = 'data_suplier/v_edit';
		$data['isi_form']=$this->m_suplier->getwhere($kd_suplier);
		$this->load->view('template', $data);
	}
	function proses_edit()
	{
		$kd_suplier = $this->input->post('kd_suplier');

		$object= array(
			'nama_suplier'=> $this->input->post('nama_suplier'),
			'alamat_suplier'=> $this->input->post('alamat_suplier'),
			'kota_suplier'=> $this->input->post('kota_suplier'),
			'telepon_suplier'=> $this->input->post('telepon_suplier'),
		);
		$this->m_suplier->simpan_edit($kd_suplier, $object);
		redirect('backend/suplier/index_suplier/data_suplier');
	}
	public function delete($kd_suplier)
	{
		$this->m_suplier->hapus($kd_suplier);
		redirect('backend/suplier/index_suplier/data_suplier');
	}
 } ?>