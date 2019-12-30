<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_User');

		if (!$this->session->userdata('id')) {
			redirect('welcome');
		}
	}

	public function index()
	{
		$data['data'] = $this->M_User->get_all();

        // keterangan untuk judul halaman
		$data['judul'] = 'Data User';

		$this->load->view('administrator/user/v_index', $data);
	}

	public function tambah()
	{
		$data['judul'] = 'Tambah Data User';
		$this->load->view('administrator/user/v_tambah', $data);
	}

	public function proses_tambah()
	{
		$array_pegawai = array(
			'username' => $this->input->post('username'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
		);
		$this->M_User->create($array_pegawai);

		//set session
		$this->session->set_flashdata('info', 'Data berhasil di tambah !');

		redirect('administrator/user','refresh');
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Data User';
		$data['data'] = $this->M_User->get_id($id);
		$this->load->view('administrator/user/v_edit', $data);
	}

	public function proses_edit()
	{
		$array_pegawai = array(
			'username' => $this->input->post('username'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
		);
		$id = $this->input->post('id');
		$this->M_User->update($array_pegawai, $id);
		//set session
		$this->session->set_flashdata('info', 'Data berhasil di ubah !');

		redirect('administrator/user','refresh');
	}

	public function hapus($parameter='')
	{
        //cek dengan primary key
		$this->db->where('id', $parameter); 
		$this->db->delete('users');

		//set session
		$this->session->set_flashdata('info', 'Data berhasil di hapus !');

		redirect('administrator/user','refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/administrator/User.php */