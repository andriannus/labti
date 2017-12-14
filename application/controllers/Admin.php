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
		$data['title'] = 'Admin - JelajahSatwa.com';
		$data['page'] = 'admin/index';
		$this->load->view('core/layout/adminbase_app', $data);
	}

	public function artikel()
	{
		$sort = $this->input->get('sort');
		$act = $this->input->get('act');

		$data['sort'] = $sort;
		$data['act'] = $act;

		$data['title'] = 'Daftar Artikel - JelajahSatwa.com';
		$data['page'] = 'admin/artikel';
		$data['query'] = $this->artikel->get_all($sort, $act)->result_array();
		$data['menu'] = 'artikel';

		$this->load->view('core/layout/adminbase_app', $data);
	}
}