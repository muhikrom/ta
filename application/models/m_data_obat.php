<?php
/**
 * 
 */
class M_data_obat extends CI_Model
{
	public function getALL()
	{
		// return $this->db->get('tbl_obat')->join('tbl_kategori')->result();
		$this->db->select('*');
		$this->db->from('tbl_obat');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_obat.id_kategori');
		$this->db->join('tbl_satuan', 'tbl_satuan.id_satuan = tbl_obat.id_satuan');
		return $query = $this->db->get()->result();
	}
	public function tambah($object)
	{
		$this->db->insert('tbl_obat',$object);
	}
	public function hapus($kd_obat)
	{
		$this->db->delete('tbl_obat',array('kd_obat' => $kd_obat ));
	}
	public function getwhere($kd_obat)
	{
		return $this->db->where('kd_obat',$kd_obat)->get('tbl_obat')->row();
	}
	public function simpan_edit($kd_obat, $object)
	{
		$this->db->where('kd_obat',$kd_obat)->update('tbl_obat', $object);
	}
	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('tbl_obat');
		$this->db->like('nama_obat', $keyword);
	}
}