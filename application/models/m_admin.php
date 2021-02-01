<?php 
/**
  * 
  */
 class m_admin extends CI_model
 {
 	
 	public function getAdmin($username, $password)
 	{
 		$this->db->where('username', $username);
 		$this->db->where('password',$password);
 		return $this->db->get('tbl_user');
 	}
 }