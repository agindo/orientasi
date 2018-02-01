<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('daftar');
	}

	public function save()
	{
		$data = array(
				'nama_lengkap' => $this->input->post('namaLengkap'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);
		$this->crud_model->save($data, 'users');
		redirect(base_url());
	}
}
