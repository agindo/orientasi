<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
        parent::__construct();
        checkSession();
    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}
}
