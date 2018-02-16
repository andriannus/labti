<?php

class Komentar_model extends CI_Model {

	public function get_all()
	{
		return $this->db->get('komentar');
	}

	public function get_by_article($id)
	{
		$this->db->where('id_artikel', $id);
		return $this->db->get('komentar');
	}

	public function insert($data)
	{
		$this->db->insert('komentar', $data);
	}
}