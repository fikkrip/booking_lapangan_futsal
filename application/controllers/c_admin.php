<?php
session_start();
class C_admin extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }
    
	public function index() {
		if($this->session->userdata('nama')){
            $this->load->view('admin/index');
        }
        else{
            $this->load->view('login');
        }
    }

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('account');
		$this->session->sess_destroy();
		redirect('Welcome/index');
	}
}
?>