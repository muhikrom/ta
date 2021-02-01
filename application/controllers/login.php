<?php 
 /**
  * 
  */
 class login extends CI_controller
 {
 	
 	public function index ()
 	{
 		$this->load->view('login/v_login');
 	}
 	public function proses_login()
 	{
 		$username = $this->input->post('username');
 		$password = $this->input->post('password');
		
 		$this->load->model('m_admin');

 		$result = $this->m_admin->getAdmin($username, $password);

 		if ($result->row()) {
 		//	var_dump($result->row());
 			$data_user = $result->row();
 			$data = [
 				'login' => true,
 				'username' => $data_user->username,
 				'level' => $data_user->level
 			];

 			$this->session->set_userdata($data);
 			redirect('backend/dashboard');
 		}else{
 			$this->session->set_flashdata('msg', 'username atau password salah');
 			redirect('login');
 		}
 	}
 	public function logout()
 	{
 		$this->session->sess_destroy();
 		redirect('login');
 	}
 }