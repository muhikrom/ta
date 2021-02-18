<?php 
/**
  * 
  */
 class m_obat_keluar extends CI_Model
 {
 	
 	public function getALL()
	{
		$this->db->select('*');
		$this->db->from('tbl_obat_keluar');
		$this->db->join('tbl_obat', 'tbl_obat.kd_obat = tbl_obat_keluar.kd_obat');
		$this->db->join('tbl_user', 'tbl_user.id_user = tbl_obat_keluar.id_user');
		return $query = $this->db->get()->result();
	}
	public function kurangi_stok(){
		
	}
 	public function tambah($object)
	{
		$this->db->insert('tbl_obat_keluar',$object);
	}
	public function getwhere($id)
	{
		return $this->db->where('id',$id)->get('tbl_obat_keluar')->row();
	}
	public function simpan_edit($id, $object)
	{
		$this->db->where('id',$id)->update('tbl_obat_keluar', $object);
	}
	public function hapus($id)
	{
		$this->db->delete('tbl_obat_keluar',array('id' => $id ));
	}
	
 } ?>