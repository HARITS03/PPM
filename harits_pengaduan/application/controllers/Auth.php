<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('active', 'active', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/auth_login');
		} else {
			$this->login();
		}
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user 	  = $this->mdl_Home->login($username);

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'username' => $user['username'],
					'nama'     => $user['nama'],
					'nik'      => $user['nik'],
					// 'id'      => $user['id']
				];
				$this->session->set_userdata($data);
				if ($user['active'] == 'aktif' ) {
					redirect('user');
				} elseif ($user['active'] == 'nonaktif' ) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Akun Ke Banned !! </div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> password salah! </div>');
				redirect('Auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email tidak ditemukan! </div>');
			redirect('Auth');
		}
	}

	public function reg()
	{
		$this->form_validation->set_rules('nik', 'Nik', 'trim|required');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('telp', 'Telp', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/auth_register');
		} else {
			$this->register();
		}
	}

	public function register()
	{
		$data = [
			'nik' => htmlspecialchars($this->input->post('nik', true)),
			'nama' => htmlspecialchars($this->input->post('nama', true)),
			'username' => htmlspecialchars($this->input->post('username')),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'telp' => htmlspecialchars($this->input->post('telp', true)),
			'active' => 'aktif'
		];

		$this->mdl_Home->insertloginuser($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil ditambahkan! </div>');
		redirect('Auth');
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil keluar! </div>');
		redirect('home');
	}
}
