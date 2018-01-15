<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function check_username($username)
	{
		$this->db->where('username', $username);
		$result = $this->db->get('user')->num_rows();
		if ($result == 0) {
			return true;
		} else {
			return false;
		}
	}

	public function get_user($where)
	{
		$this->db->where($where);
		$result = $this->db->get('user');
		if ($result->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function create($data)
	{
		$this->db->insert('user', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}