<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model', 'user');
	}

	/*
	| Form Login Admin
	*/
	public function login_admin()
	{
		if($this->session->status != 'login_admin') {
			$data['title'] = 'Login - Cicak-World.co';
			$data['page'] = 'site/login_admin';
			$data['menu'] = 'login';

			$this->load->view('core/layout/userbase_app', $data);
		} else {
			redirect('admin');
		}
	}

	/*
	| Form Login User
	*/
	public function login()
	{
		if($this->session->status != 'login') {
			$data['title'] = 'Login - Cicak-World.co';
			$data['page'] = 'site/login';
			$data['menu'] = 'login';

			$this->load->view('core/layout/userbase_app', $data);
		} else {
			redirect('site');
		}
	}

	public function register()
	{
		$data['title'] = 'Register - Cicak-Wworld.co';
		$data['page'] = 'site/register';

		$this->load->view('core/layout/userbase_app', $data);
	}

	public function edit_password()
	{
		if($this->session->status == 'login') {
			$data['title'] = 'Edit Password - Cicak-Wworld.co';
			$data['page'] = 'site/edit_password';
			$data['menu'] = 'login';

			$this->load->view('core/layout/userbase_app', $data);
		} else {
			redirect('admin');
		}
	}

	/*
	| Login Admin
	*/
	public function login_admin_proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
					'username' => $username,
					'password' => md5($password),
					'level' => 1
					);

		$result = $this->user->get_user($where);

		if($result) {
			$data_session = array(
							'nama' => $username,
							'status' => 'login_admin'
							);
			$this->session->set_userdata($data_session);

			$message['success'] = true;
		} else {
			$message['success'] = false;
		}
		echo json_encode($message);
	}

	/*
	| Login User
	*/
	public function login_proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
					'username' => $username,
					'password' => md5($password),
					'level' => 2
					);

		$result = $this->user->get_user($where);

		if($result) {
			$data_session = array(
							'nama' => $username,
							'status' => 'login'
							);
			$this->session->set_userdata($data_session);

			$message['success'] = true;
		} else {
			$message['success'] = false;
		}
		echo json_encode($message);
	}

	public function check_username()
	{
		$username = $this->input->post('username');

		$result = $this->user->check_username($username);
		if ($result) {
			$message['success'] = true;
		} else {
			$message['message'] = false;
		}
		echo json_encode($message);
	}

	public function register_proses()
	{
		$data['username'] = $this->input->post('username');
		$data['password'] = md5($this->input->post('password'));
		$data['level'] = 2;

		$result = $this->user->create($data);
		if ($result) {
			$message['success'] = true;
		} else {
			$message['success'] = false;
		}
		echo json_encode($message);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('site');
	}
}