<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model', 'user');
	}

	public function login()
	{
		if($this->session->status != 'login') {
			$data['title'] = 'Login - JelajahSatwa.com';
			$data['page'] = 'site/login';
			$data['menu'] = 'login';

			$this->load->view('core/layout/base_app', $data);
		} else {
			redirect('admin');
		}
	}

	public function edit_password()
	{
		if($this->session->status == 'login') {
			$data['title'] = 'Edit Password - JelajahSatwa.com';
			$data['page'] = 'site/edit_password';
			$data['menu'] = 'login';

			$this->load->view('core/layout/base_app', $data);
		} else {
			redirect('admin');
		}
	}

	public function login_proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
					'username' => $username,
					'password' => md5($password)
					);

		$cek = $this->user->get_user($where)->num_rows();

		if($cek > 0) {
			$data_session = array(
							'nama' => $username,
							'status' => 'login'
							);
			$this->session->set_userdata($data_session);

			redirect('admin');
		} else {
			echo "Username atau password salah...";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('site');
	}
}