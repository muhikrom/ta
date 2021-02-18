<?php 
/**
  * 
  */
 class m_satuan extends CI_Model
 {
 	
 	public function getALL()
 	{
 		return $this->db->get('tbl_satuan')->result();
 	}
 	public function tambah($object)
	{
		$this->db->insert('tbl_satuan',$object);
	}
 } ?>