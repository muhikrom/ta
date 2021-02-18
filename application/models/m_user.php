<?php 
/**
  * 
  */
 class m_user extends CI_Model
 {
 	
 	public function getALL()
 	{
 		return $this->db->get('tbl_user')->result();
 	}
 	
 } ?>