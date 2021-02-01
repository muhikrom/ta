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
 	
 } ?>