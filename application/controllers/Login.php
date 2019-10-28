<?php 
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("login",$where)->num_rows();
        
        if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
            );
			$this->session->set_userdata($data_session);
            $this->load->model('m_login');
            $account = $this->m_login->cek_account($username);
            if($account == 'admin'){
                 redirect(base_url("index.php/c_admin/index"));
            }
            else{
                 redirect(base_url("index.php/c_member/index"));
            }
        }
        else
        {
			redirect(base_url("index.php/Welcome/index"));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}?>