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
	public function data_obat()
	{
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
	public function add_kategori()
	{
		$data['judul'] = 'Tambah Data Obat';
		$data['halaman'] = 'data_obat/v_add_kategori';
		$this->load->view('template', $data);
	}
	public function proses_add_kategori()
	{
		
	}
	public function proses_add()
	{
		$this->form_validation->set_rules('kode_obat','Kode Obat','required');
		$this->form_validation->set_rules('nama_obat','Nama Obat','required');
		$this->form_validation->set_rules('kategori','kategori','required');
		$this->form_validation->set_rules('stok','stok','required');
		$this->form_validation->set_rules('satuan','Satuan','required');
		$this->form_validation->set_rules('tgl_expired','tgl_expired','required');

		if ($this->form_validation->run() == false){
			$this->add_obat();
		} else {

		$object= array(
			'kd_obat'=> $this->input->post('kode_obat'),
			'nama_obat'=> $this->input->post('nama_obat'),
			'id_kategori'=> $this->input->post('kategori'),
			'stok'=> $this->input->post('stok'),
			'id_satuan'=> $this->input->post('satuan'),
			'tgl_expired'=> $this->input->post('tgl_expired')
			
		);
		// var_dump($$]+);
		$this->m_data_obat->tambah($object);
		redirect('backend/dashboard/data_obat/data_obat');
	}
	}
	public function edit($id_obat)
	{

		$this->db->where('id_obat', $id_obat);
		$data_table= $this->db->get('tbl_data_obat')->row();

		$data['judul']= 'Ubah Data Obat';
		$data['halaman'] = 'data_obat/v_edit';
		$data['isi_form']=$this->m_data_obat->getwhere($id_obat);
		$this->load->view('template', $data);
	}
	function proses_edit()
	{
		$id_obat = $this->input->post('id_obat');

		$object= array(
			'nama_obat'=> $this->input->post('nama_obat'),
			'satuan'=> $this->input->post('satuan'),
			'harga'=> $this->input->post('harga'),
			'keterangan'=> $this->input->post('keterangan'),
		);
		$this->m_data_obat->simpan_edit($id_obat, $object);
		redirect('backend/dashboard/data_obat/data_obat');
	}
	public function delete($id_obat)
	{
		$this->m_data_obat->hapus($id_obat);
		redirect('backend/dashboard/data_obat/data_obat');
	}
	// Data Pengeluaran
	public function data_suplier()
	{
		$data ['judul'] = 'Data Suplier';
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
		$this->form_validation->set_rules('kd_suplier','Kode suplier','required');
		$this->form_validation->set_rules('nama_suplier','nama suplier','required');
		$this->form_validation->set_rules('alamat_suplier','Alamat Suplier','required');
		$this->form_validation->set_rules('kota_suplier','kota suplier','required');
		$this->form_validation->set_rules('telepon_suplier','telepon suplier','required');

		if ($this->form_validation->run() == false){
			$this->add_suplier();
		} else {

		$object= array(
			'kd_suplier'=> $this->input->post('kd_suplier'),
			'nama_suplier'=> $this->input->post('nama_suplier'),
			'alamat_suplier'=> $this->input->post('alamat_suplier'),
			'kota_suplier'=> $this->input->post('kota_suplier'),
			'telepon_suplier'=> $this->input->post('telepon_suplier'),
		);
		$this->m_suplier->tambah($object);
		redirect('backend/dashboard/data_suplier/data_suplier');
	}
	}
	public function edit_pengeluaran($id_pengeluaran)
	{

		$this->db->where('id_pengeluaran', $id_pengeluaran);
		$data_table= $this->db->get('tbl_pengeluaran')->row();

		$data['judul']= 'Ubah Data Pengeluaran';
		$data['halaman'] = 'data_pengeluaran/v_edit';
		$data['isi_form']=$this->m_pengeluaran->getwhere($id_pengeluaran);
		$this->load->view('template', $data);
	}
	function proses_editout()
	{
		$id_pengeluaran = $this->input->post('id_pengeluaran');

		$object= array(
			'id_stok_obat_apotik'=> $this->input->post('id_stok_obat_apotik'),
			'jumlah'=> $this->input->post('jumlah'),
			'total'=> $this->input->post('total'),
			'tanggal_pengeluaran'=> $this->input->post('tanggal_pengeluaran'),
		);
		$this->m_pengeluaran->simpan_edit($id_pengeluaran, $object);
		redirect('backend/dashboard/data_pengeluaran/data_pengeluaran');
	}
	public function hapus($id_pengeluaran)
	{
		$this->m_pengeluaran->delete($id_pengeluaran);
		redirect('backend/dashboard/data_pengeluaran/data_pengeluaran');
	}
	public function obat_masuk()
	{
		$data['judul'] = 'Data Obat Masuk';
		$data['halaman'] = 'data_obat_masuk/obat_masuk';
		$this->load->view('template', $data);
	}
	public function obat_keluar()
	{
		$data['judul'] = 'Data Obat keluar';
		$data['halaman'] = 'data_obat_keluar/data_obat_keluar';
		$this->load->view('template', $data);
	}

}