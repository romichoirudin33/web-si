<?php

class Register extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_User');
		$this->load->library('form_validation');
	}

	public function index()
	{	

		// Rules / aturan untuk form nama
		$this->form_validation->set_rules('nama', 'Nama', 'required',
			array('required' => '{field} harus diisi'));

		// Rules / aturan untuk form username
		$this->form_validation->set_rules('username','Username','required|is_unique[users.username]|alpha_numeric',
			array('required' => '{field} harus diisi',
				'is_unique' => '{field} sudah ada. Silahkan pilih username lain',
				'alpha_numeric' => '{field} hanya boleh huruf dan angka saja'));

		// Rules / aturan untuk form email
		$this->form_validation->set_rules('email','Email','required|valid_email',
			array('required' => '{field} harus diisi',
				'valid_email' => 'Email anda tidak valid'));

		// Rules / aturan untuk password
		$this->form_validation->set_rules('password','Password','required|alpha_numeric|min_length[8]|matches[confirm]');

		$this->form_validation->set_rules('confirm','Konfirmasi','required|matches[password]');



		if($this->form_validation->run() == false){

			$this->load->view('register');

		}else {
			$array_user = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
			);

			$this->M_User->create($array_user);
			$this->session->set_flashdata('register', 'Proses Registrasi Berhasil');
			redirect('welcome');
		}
	}

}
