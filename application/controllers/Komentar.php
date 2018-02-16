<?php

class Komentar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('komentar_model', 'komentar');
	}

	public function tambah_proses()
	{
		$id_artikel = $this->input->post('id_artikel');
		$id_user = $this->input->post('id_user');
		$isi = $this->input->post('isi');

		$data = array(
			'id_artikel' => $id_artikel,
			'id_user' => $id_user,
			'isi' => $isi
		);

		$this->komentar->insert($data);
		redirect('site/view/'.$id_artikel);
	}
}