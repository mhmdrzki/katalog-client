<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

        $this->load->library('form_validation');

	}

	function index(){
		if ($this->session->userdata('status') == null) {
                $this->load->view('login');
        }else{
        	redirect('mobil');
        }
		

	}
 
	function aksi_login(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($_POST AND $this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if($username == 'admin' && $password == 'admin'){
	 
				$data_session = array(
					'nama' => $username,
					'status' => 'login'
					);
	 
				$this->session->set_userdata($data_session);
	 
                    redirect('mobil');
	 
			}else{
				$this->session->set_flashdata('failed', 'Username atau Password Salah.');
                redirect('auth');
			}
        }else{
            redirect('auth');
        }
			
		
		
	}
 
	function logout(){
		$this->session->unset_userdata('nama');
        $this->session->unset_userdata('status');
        redirect('auth');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */