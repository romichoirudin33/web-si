<?php

class LoginController extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_User');
		$this->load->library('form_validation');

	}

	public function proses_login()
	{

		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$login = $this->M_User->get_user($username,$pass);

		if ($login) {
			// Array data user untuk diisi ke session
			$data_user = array(
				'id' => $login['id'],
				'nama' => $login['nama']
			);
			
			// Membuat Session
			$this->session->set_userdata($data_user);
			// --- Akhir pembuatan session
			
			$this->session->set_flashdata('login','Login Berhasil');
			redirect('administrator/pegawai','refresh');
		}else{
			$this->session->set_flashdata('gagal','Username atau Password Salah');
			redirect('welcome');
		}

	}

	public function proses_logout()
	{

		session_destroy();
		redirect('welcome');
		
	}

}
