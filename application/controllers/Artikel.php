<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('artikel_model', 'artikel');

		if($this->session->status != 'login') {
			redirect('user/login');
		}
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Artikel - Cicak-Wworld.co';
		$data['page'] = 'artikel/tambah_artikel';
		$data['menu'] = 'artikel';

		$this->load->view('core/layout/adminbase_app', $data);
	}

	public function tambah_proses()
	{
		$judul = $this->input->post('judul');
		$kategori = strtolower($this->input->post('kategori'));
		$isi = $this->input->post('isi');

		$data = array(
			'judul' => $judul,
			'kategori' => $kategori,
			'konten' => $isi
		);

		$this->artikel->insert($data);
		$this->session->set_flashdata('tambah', true);
		redirect('admin/artikel');
	}

	public function edit($id)
	{
		$query = $this->artikel->get_one($id)->row();

		$data['title'] = $query->judul.' - Cicak-Wworld.co';
		$data['page'] = 'artikel/edit_artikel';
		$data['query'] = $query;
		$data['menu'] = 'artikel';

		$this->load->view('core/layout/adminbase_app', $data);
	}

	public function edit_proses()
	{
		$id = $this->input->post('id');

		$judul = $this->input->post('judul');
		$kategori = strtolower($this->input->post('kategori'));
		$tanggal_edit = $this->input->post('tanggal_edit');
		$isi = $this->input->post('isi');

		$data = array(
			'judul' => $judul,
			'kategori' => $kategori,
			'tanggal_edit' => $tanggal_edit,
			'konten' => $isi
		);

		$this->artikel->update($id, $data);
		$this->session->set_flashdata('edit', true);
		redirect('admin/artikel');
	}

	public function hapus($id)
	{
		$this->artikel->delete($id);

		$this->session->set_flashdata('hapus', true);
		redirect('admin/artikel');
	}

	public function toggle_status()
	{
		$id = $this->input->post('id');
		$data['status'] = $this->input->post('status');

		$this->artikel->toggle_status($id, $data);
		$this->session->set_flashdata('toggle_status', true);
		redirect('admin/artikel');
	}
}