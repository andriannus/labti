<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

	public function get_all()
	{
		$this->db->order_by('id', 'desc');
		return $this->db->get('artikel');
	}

	public function get_all_home()
	{
		$this->db->where('status', '1');
		return $this->db->get('artikel');
	}

	public function get_all_like($q)
	{
		$this->db->like('judul', $q);
		$this->db->or_like('kategori', $q);
		$this->db->or_like('konten', $q);

		return $this->db->get('artikel');
	}

	public function get_one($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('artikel');
	}

	public function insert($data)
	{
		$this->db->insert('artikel', $data);
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->set($data);
		$this->db->update('artikel');
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('artikel');
	}

	public function toggle_status($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->set($data);
		$this->db->update('artikel');
	}
}