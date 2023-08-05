<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}


	public function index()
	{
		$data['konten'] = "/index";
		$data['judul'] = "Dashboard";
		$this->load->view('template/master', $data);
	}
}

