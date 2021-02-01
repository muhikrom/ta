<?php 
/**
 * 
 */
class m_suplier extends CI_Model
{
	
	public function getALL()
	{
		return $this->db->get('tbl_suplier')->result();
	}
	public function tambah($object)
	{
		$this->db->insert('tbl_suplier',$object);
	}
	public function getwhere($kd_suplier)
	{
		return $this->db->where('kd_suplier',$kd_suplier)->get('tbl_suplier')->row();
	}
	public function simpan_edit($kd_suplier, $object)
	{
		$this->db->where('kd_suplier',$kd_suplier)->update('tbl_suplier', $object);
	}
	public function delete($kd_suplier)
	{
		$this->db->delete('tbl_suplier',array('kd_suplier' => $kd_suplier ));
	}
}