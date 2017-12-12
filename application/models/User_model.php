<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get_user($where)
	{
		$this->db->where($where);
		return $this->db->get('user');
	}
}