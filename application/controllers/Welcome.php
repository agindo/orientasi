<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		checkLogin();
		$data['alert'] = "";
		$this->load->view('log', $data);
	}

	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$check = $this->auth_model->auth($username, $password);
		$checkUsers = $this->auth_model->authUsers($username, $password);
		if($check == 1){
			$this->session->set_userdata(array('statusUsers'=>1, 'checkUsers'=>$checkUsers));
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
