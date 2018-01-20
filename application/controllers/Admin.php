<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('artikel_model', 'artikel');

		if($this->session->status != 'login') {
			redirect('user/login');
		}
	}

	public function index()
	{
		$data['title'] = 'Admin - Cicak-Wworld.co';
		$data['page'] = 'admin/index';
		$this->load->view('core/layout/adminbase_app', $data);
	}

	public function artikel()
	{
		$data['title'] = 'Daftar Artikel - Cicak-Wworld.co';
		$data['page'] = 'admin/artikel';
		$data['query'] = $this->artikel->get_all()->result_array();
		$data['menu'] = 'artikel';

		$this->load->view('core/layout/adminbase_app', $data);
	}
}