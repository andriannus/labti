<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('artikel_model', 'artikel');
	}

	public function index()
	{
		$data['title'] = 'Informasi lengkap binatang - cicak-world.co';
		$data['page'] = 'site/index';
		$data['query'] = $this->artikel->get_all_home()->result_array();
		$this->load->view('core/layout/base_app', $data);
	}

	public function cari()
	{
		$q = $this->input->get('q');

		if ($q != '') {
			$data['title'] = 'Hasil Pencarian..';
			$data['page'] = 'site/index';
			$data['search'] = $q;
			$data['query'] = $this->artikel->get_all_like($q)->result_array();
			$this->load->view('core/layout/base_app', $data);
		} else {
			redirect('site');
		}
	}

	public function about()
	{
		$data['title'] = 'About - cicak-world.co';
		$data['page'] = 'site/about';
		$data['menu'] = 'about';

		$this->load->view('core/layout/base_app', $data);
	}

	public function view($id)
	{
		$query = $this->artikel->get_one($id)->row();
		if (count($query) > 0) {
			$data['title'] = $query->judul.' - cicak-world.co';
			$data['page'] = 'artikel/tampil_artikel';
			$data['query'] = $query;
			$data['menu'] = 'artikel';

			$this->load->view('core/layout/base_app', $data);
		} else {
			$this->error404();
		}
	}

	public function error404()
	{
		$data['title'] = 'Page Not Found - cicak-world.co';
		$data['page'] = 'site/error404';

		$this->load->view('core/layout/base_app', $data);
	}
}