<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Gaji');

		if (!$this->session->userdata('id')) {
			redirect('welcome');
		}
	}

	public function index()
	{
		$data['data_gaji'] = $this->M_Gaji->get_all();

        // keterangan untuk judul halaman
		$data['judul'] = 'Data Gaji';

		$this->load->view('administrator/gaji/v_index', $data);
	}

	public function tambah()
	{
		$data['judul'] = 'Tambah Data Gaji';
		$this->load->view('administrator/gaji/v_tambah', $data);
	}

	public function proses_tambah()
	{
		$array_pegawai = array(
			'nama_pegawai' => $this->input->post('nama_pegawai'),
			'gaji_pokok' => $this->input->post('gaji_pokok'),
			'tunjangan' => $this->input->post('tunjangan'),
		);
		$this->M_Gaji->create($array_pegawai);

		//set session
		$this->session->set_flashdata('info', 'Data berhasil di tambah !');

		redirect('administrator/gaji','refresh');
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Data Gaji';
		$data['data_pegawai'] = $this->M_Gaji->get_id($id);
		$this->load->view('administrator/gaji/v_edit', $data);
	}

	public function proses_edit()
	{
		$array_pegawai = array(
			'nama_pegawai' => $this->input->post('nama_pegawai'),
			'gaji_pokok' => $this->input->post('gaji_pokok'),
			'tunjangan' => $this->input->post('tunjangan'),
		);
		$id = $this->input->post('id');
		$this->M_Gaji->update($array_pegawai, $id);
		//set session
		$this->session->set_flashdata('info', 'Data berhasil di ubah !');

		redirect('administrator/gaji','refresh');
	}

	public function hapus($parameter='')
	{
        //cek dengan primary key
		$this->db->where('id', $parameter); 
		$this->db->delete('gaji');

		//set session
		$this->session->set_flashdata('info', 'Data berhasil di hapus !');

		redirect('administrator/gaji','refresh');
	}

}

/* End of file Gaji.php */
/* Location: ./application/controllers/administrator/Gaji.php */