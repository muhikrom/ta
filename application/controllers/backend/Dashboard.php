<?php 

/**
 * 
 */
class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_data_obat');
		$this->load->model('m_suplier');
		$this->load->model('m_kategori');
		$this->load->model('m_satuan');

		if ($this->session->userdata('login') == false){
			redirect('login');
		}
	}
	public function index()
	{
		$data ['judul'] = 'Menu Utama';
		$data ['halaman'] = 'index';
		$this->load->view('template', $data);
	}
	//keyword

	public function data_obat()
	{
		//keyword
		$data['judul'] = 'Data Obat';
		$data['halaman'] = 'data_obat/data_obat';
		$data['isi_obat'] = $this->m_data_obat->getALL();
		$this->load->view('template', $data);
	}
	public function add_obat()
	{
		$data['judul'] = 'Tambah Data Obat';
		$data['halaman'] = 'data_obat/v_add';
		$data['data_kategori'] = $this->m_kategori->getALL();
		$data['data_satuan'] = $this->m_satuan->getALL();
		$this->load->view('template', $data);
	}
	
	public function proses_add()
	{
		$this->form_validation->set_rules('nama_obat','Nama Obat','required');
		$this->form_validation->set_rules('kategori','kategori','required');
		$this->form_validation->set_rules('satuan','Satuan','required');

		if ($this->form_validation->run() == false){
			$this->add_obat();
		} else {

		$object= array(
			'nama_obat'=> $this->input->post('nama_obat'),
			'id_kategori'=> $this->input->post('kategori'),
			'id_satuan'=> $this->input->post('satuan'),
			
		);
		$this->m_data_obat->tambah($object);
		redirect('backend/dashboard/data_obat/data_obat');
	}
	}
	public function edit($kd_obat)
	{

		$this->db->where('kd_obat', $kd_obat);
		$data_table= $this->db->get('tbl_obat')->row();

		$data['judul']= 'Ubah Data Obat';
		$data['halaman'] = 'data_obat/v_edit';
		$data['data_kategori'] = $this->m_kategori->getALL();
		$data['data_satuan'] = $this->m_satuan->getALL();
		$data['isi_form']=$this->m_data_obat->getwhere($kd_obat);
		$this->load->view('template', $data);
	}
	function proses_edit()
	{
		$kd_obat = $this->input->post('kd_obat');

		$object= array(
			'nama_obat'=> $this->input->post('nama_obat'),
			'id_kategori'=> $this->input->post('kategori'),
			'id_satuan'=> $this->input->post('satuan'),
		);
		$this->m_data_obat->simpan_edit($kd_obat, $object);
		redirect('backend/dashboard/data_obat/data_obat');
	}
	public function delete($kd_obat)
	{
		$this->m_data_obat->hapus($kd_obat);
		redirect('backend/dashboard/data_obat/data_obat');
	}
	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['nama_obat']=$this->m_data_obat->get_keyword($keyword);
		$this->load->view('template', $data);
	}

}