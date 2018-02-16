<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
		parent::__construct();

		// Load model
		$this->load->model('artikel_model', 'artikel');
		$this->load->model('komentar_model', 'komentar');
		$this->load->model('user_model', 'user');
	}

	// url -> http://localhost/site/
	public function index()
	{
		$data['title'] = 'Informasi lengkap binatang - Cicak-Wworld.co';
		$data['page'] = 'site/index';
		$data['query'] = $this->artikel->get_all_home()->result_array();
		$this->load->view('core/layout/base_app', $data);
	}

	// url -> http://localhost/site/cari/?q=xxx
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

	// url -> http://localhost/site/about
	public function about()
	{
		$data['title'] = 'About - Cicak-Wworld.co';
		$data['page'] = 'site/about';
		$data['menu'] = 'about';

		$this->load->view('core/layout/base_app', $data);
	}

	// url -> http://localhost/site/view/ID
	public function view($id)
	{
		$komentar = $this->komentar->get_by_article($id)->result_array();

		foreach ($komentar as $komen) {
			$user = $this->user->get_one($komen['id_user'])->row();
		}

		$query = $this->artikel->get_one($id)->row();
		if (isset($query) > 0) {
			$data['title'] = $query->judul.' - Cicak-Wworld.co';
			$data['page'] = 'artikel/tampil_artikel';
			$data['query'] = $query;
			$data['komentar'] = $komentar;
			if (isset($user)) {
				$data['user'] = $user;
			}
			$data['menu'] = 'artikel';

			$this->load->view('core/layout/base_app', $data);
		} else {
			$this->error404();
		}
	}

	// Fungsi yang digunakan apabila halaman tidak ditemukan
	public function error404()
	{
		$data['title'] = 'Page Not Found - Cicak-Wworld.co';
		$data['page'] = 'site/error404';

		$this->load->view('core/layout/base_app', $data);
	}
}