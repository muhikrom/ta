<?php 
/**
  * 
  */
 class data_obat_masuk extends CI_Controller
 {
 	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_data_obat');
		$this->load->model('m_suplier');
		$this->load->model('m_user');
		$this->load->model('m_obat_masuk');

		if ($this->session->userdata('login') == false){
			redirect('login');
		}
	}
 	public function index_obat_masuk()
	{
		$data['judul'] = 'Data Obat Masuk';
		$data['halaman'] = 'data_obat_masuk/obat_masuk';
		$data['isi_obat_masuk'] = $this->m_obat_masuk->getALL();
		$this->load->view('template', $data);
	}
	public function add_obat_masuk()
	{
		$data['judul'] = 'Tambah Data Obat Masuk';
		$data['halaman'] = 'data_obat_masuk/v_add';
		$data['data_obat'] = $this->m_data_obat->getALL();
		$data['data_suplier'] = $this->m_suplier->getALL();
		$data['data_user'] = $this->m_user->getALL();
		$this->load->view('template', $data);
	}
	public function proses_addout()
	{
		$this->form_validation->set_rules('nama_obat','Nama Obat','required');
		$this->form_validation->set_rules('stok','Stok','required');
		$this->form_validation->set_rules('tgl_obat_masuk','Tanggal Masuk','required');
		$this->form_validation->set_rules('nama_suplier','Suplier','required');
		$this->form_validation->set_rules('keterangan','Keterangan','required');
		$this->form_validation->set_rules('tgl_expired','Tanggal Expired','required');
		$this->form_validation->set_rules('username','Nama User','required');

		if ($this->form_validation->run() == false){
			$this->add_obat_masuk();
		} else {

		$object= array(
			'kd_obat'=> $this->input->post('nama_obat'),
			'stok'=> $this->input->post('stok'),
			'tgl_obat_masuk'=> $this->input->post('tgl_obat_masuk'),
			'kd_suplier'=> $this->input->post('nama_suplier'),
			'keterangan'=> $this->input->post('keterangan'),
			'tgl_expired'=> $this->input->post('tgl_expired'),
			'id_user'=> $this->input->post('username'),
		);
			var_dump($object);
		$this->m_obat_masuk->tambah($object);
		redirect('backend/data_obat_masuk/index_obat_masuk');
		
	}
	}
	public function edit($id)
	{

		$this->db->where('id', $id);
		$data_table= $this->db->get('tbl_obat_masuk')->row();

		$data['judul']= 'Ubah Data Obat Masuk';
		$data['halaman'] = 'data_obat_masuk/v_edit';
		$data['data_obat'] = $this->m_data_obat->getALL();
		$data['data_suplier'] = $this->m_suplier->getALL();
		$data['data_user'] = $this->m_user->getALL();
		$data['isi_form']=$this->m_obat_masuk->getwhere($id);
		$this->load->view('template', $data);
	}
	function proses_edit()
	{
		$id = $this->input->post('id');

		$object= array(
			'kd_obat'=> $this->input->post('nama_obat'),
			'stok'=> $this->input->post('stok'),
			'tgl_obat_masuk'=> $this->input->post('tgl_obat_masuk'),
			'kd_suplier'=> $this->input->post('nama_suplier'),
			'keterangan'=> $this->input->post('keterangan'),
			'tgl_expired'=> $this->input->post('tgl_expired'),
			'id_user'=> $this->input->post('username'),
		);
		$this->m_obat_masuk->simpan_edit($id, $object);
		redirect('backend/data_obat_masuk/index_obat_masuk');
	}
	public function delete($id)
	{
		$this->m_obat_masuk->hapus($id);
		redirect('backend/data_obat_masuk/index_obat_masuk');
	}
 } ?>