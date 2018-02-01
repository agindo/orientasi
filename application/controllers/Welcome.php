<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		checkLogin();
		$this->load->view('log');
	}

	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$check = $this->auth_model->auth($username, $password);
		if($check == 1){
			$this->session->set_userdata(array('statusUsers'=>1));
			redirect('dashboard');
		}else{
			redirect(base_url());
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
