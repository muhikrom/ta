<?php 
/**
  * 
  */
 class m_kategori extends CI_Model
 {
 	
 	public function getALL()
 	{
 		return $this->db->get('tbl_kategori')->result();
 	}
 	
 } ?>