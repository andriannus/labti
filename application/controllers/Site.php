<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('artikel_model', 'artikel');
	}

	public function index()
	{
		$data['title'] = 'Informasi lengkap binatang - JelajahSatwa.com';
		$data['page'] = 'site/index';
		$data['query'] = $this->artikel->get_all_home()->result_array();
		$this->load->view('core/layout/base_app', $data);
	}

	public function about()
	{
		$data['title'] = 'About - JelajahSatwa.com';
		$data['page'] = 'site/about';
		$data['menu'] = 'about';

		$this->load->view('core/layout/base_app', $data);
	}

	public function view($id)
	{
		$query = $this->artikel->get_one($id)->row();
		$data['title'] = $query->judul.' - JelajahSatwa.com';
		$data['page'] = 'artikel/tampil_artikel';
		$data['query'] = $query;
		$data['menu'] = 'artikel';

		$this->load->view('core/layout/base_app', $data);
	}

	public function error404()
	{
		$data['title'] = 'Page Not Found - JelajahSatwa.com';
		$data['page'] = 'site/error404';

		$this->load->view('core/layout/base_app', $data);
	}
}