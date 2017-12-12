<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('artikel_model', 'artikel');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Artikel - JelajahSatwa.com';
		$data['page'] = 'artikel/tambah_artikel';
		$data['menu'] = 'artikel';

		$this->load->view('core/layout/adminbase_app', $data);
	}

	public function tambah_proses()
	{
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$isi = $this->input->post('isi');

		$data = array(
			'judul' => $judul,
			'kategori' => $kategori,
			'konten' => $isi
		);

		$this->artikel->insert($data);
		redirect('admin/dashboard');
	}

	public function edit($id)
	{
		$data['title'] = 'Tambah Artikel - JelajahSatwa.com';
		$data['page'] = 'artikel/edit_artikel';
		$data['query'] = $this->artikel->get_one($id)->row();
		$data['menu'] = 'artikel';

		$this->load->view('core/layout/adminbase_app', $data);
	}

	public function toggle_status()
	{
		$id = $this->input->post('id');
		$data['status'] = $this->input->post('status');

		$this->artikel->toggle_status($id, $data);
		redirect('admin/artikel');
	}
}