<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();

		// Load model
		$this->load->model('artikel_model', 'artikel');

		// Jika tidak login admin, akan dialihkan ke halaman awal
		if($this->session->status != 'login_admin') {
			redirect('site');
		}
	}

	// url -> http://localhost/admin/
	public function index()
	{
		$data['title'] = 'Admin - Cicak-Wworld.co';
		$data['page'] = 'admin/index';
		$this->load->view('core/layout/adminbase_app', $data);
	}

	// url -> http://localhost/admin/artikel/
	public function artikel()
	{
		$data['title'] = 'Daftar Artikel - Cicak-Wworld.co';
		$data['page'] = 'admin/artikel';

		// Menampung data yang didapat dari function get_all() pada model artikel.
		$data['query'] = $this->artikel->get_all()->result_array();
		$data['menu'] = 'artikel';

		$this->load->view('core/layout/adminbase_app', $data);
	}
}