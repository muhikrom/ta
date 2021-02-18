<?php 
/**
  * 
  */
 class data_obat_keluar extends CI_Controller
 {
 	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_data_obat');
		$this->load->model('m_obat_keluar');
		$this->load->model('m_user');
		$this->load->model('m_obat_masuk');

		if ($this->session->userdata('login') == false){
			redirect('login');
		}
	}
 	public function index_obat_keluar()
 	{
 		$data['judul'] = 'Data Obat Keluar';
		$data['halaman'] = 'data_obat_keluar/data_obat_keluar';
		$data['isi_obat_keluar'] = $this->m_obat_keluar->getALL();
		$this->load->view('template', $data);
 	}
 	public function add_obat_keluar()
	{
		$data['judul'] = 'Tambah Data Obat Keluar';
		$data['halaman'] = 'data_obat_keluar/v_add';
		$data['data_obat'] = $this->m_data_obat->getALL();
		$data['data_user'] = $this->m_user->getALL();
		$this->load->view('template', $data);
	}
		public function proses_addout()
	{
		$this->form_validation->set_rules('nama_obat','Nama Obat','required');
		$this->form_validation->set_rules('tgl_obat_keluar','Tanggal keluar','required');
		$this->form_validation->set_rules('kd_rekam_medik','Pasien','required');
		$this->form_validation->set_rules('jumlah','Jumlah','required');
		$this->form_validation->set_rules('keterangan','Keterangan','required');
		$this->form_validation->set_rules('username','Nama User','required');

		if ($this->form_validation->run() == false){
			$this->add_obat_keluar();
		} else {

		$object= array(
			'kd_obat'=> $this->input->post('nama_obat'),
			'tgl_obat_keluar'=> $this->input->post('tgl_obat_keluar'),
			'kd_rekam_medik'=> $this->input->post('kd_rekam_medik'),
			'jumlah'=> $this->input->post('jumlah'),
			'keterangan'=> $this->input->post('keterangan'),
			'id_user'=> $this->input->post('username'),
		);


			// var_dump($object);
		$this->m_obat_keluar->tambah($object);
		$this->m_obat_masuk->update_obat($object);
		redirect('backend/data_obat_keluar/index_obat_keluar');
		
	}
	}
	public function edit($id)
	{

		$this->db->where('id', $id);
		$data_table= $this->db->get('tbl_obat_keluar')->row();

		$data['judul']= 'Ubah Data Obat keluar';
		$data['halaman'] = 'data_obat_keluar/v_edit';
		$data['data_obat'] = $this->m_data_obat->getALL();
		$data['data_user'] = $this->m_user->getALL();
		$data['isi_form']=$this->m_obat_keluar->getwhere($id);
		$this->load->view('template', $data);
	}
	function proses_edit()
	{
		$id = $this->input->post('id');

		$object= array(
			'kd_obat'=> $this->input->post('nama_obat'),
			'tgl_obat_keluar'=> $this->input->post('tgl_obat_keluar'),
			'kd_rekam_medik'=> $this->input->post('kd_rekam_medik'),
			'jumlah'=> $this->input->post('jumlah'),
			'keterangan'=> $this->input->post('keterangan'),
			'id_user'=> $this->input->post('username'),
		);
		$this->m_obat_keluar->simpan_edit($id, $object);
		redirect('backend/data_obat_keluar/index_obat_keluar');
	}
	public function delete($id)
	{
		$this->m_obat_keluar->hapus($id);
		redirect('backend/data_obat_keluar/index_obat_keluar');
	}
 } ?>