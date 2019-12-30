<?php

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pegawai');
        
        if (!$this->session->userdata('id')) {
            redirect('welcome');
        }
    }

    public function index()
    {
        $data['data_pegawai'] = $this->M_pegawai->getAll();

        // keterangan untuk judul halaman
        $data['judul'] = 'Data Pegawai';

        $this->load->view('administrator/pegawai/v_index', $data);

    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Pegawai';

        //ngeload view tambah pegawai
        $this->load->view('administrator/pegawai/v_tambah', $data);

    }

    public function proses_tambah()
    {
        //fungsi untuk menyimpan data ke database

        $array_pegawai = array(
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'jabatan' => $this->input->post('jabatan'),
        );
        $this->M_pegawai->create($array_pegawai);

        //mengalihkan ke url pegawai/index
        redirect('administrator/pegawai','refresh');

    }

    public function hapus($parameter='')
    {
        //cek dengan primary key
        $this->db->where('id', $parameter); 
        $this->db->delete('tbl_pegawai');

        //mengalihkan ke url pegawai/index
        redirect('administrator/pegawai','refresh');
    }

    public function edit($id='')
    {
        $data['judul'] = 'Edit Data Pegawai';

        $data['data_pegawai'] = $this->M_pegawai->getId($id);

        //ngeload view edit pegawai

        $this->load->view('administrator/pegawai/v_edit', $data);

    }

    public function proses_edit()
    {
        //fungsi untuk menyimpan data ke database
        $array_pegawai = array(
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'jabatan' => $this->input->post('jabatan'),
        );
        $id = $this->input->post('id');
        $this->M_pegawai->update($array_pegawai, $id);

        //mengalihkan ke url pegawai/index
        redirect('administrator/pegawai','refresh');
    }

}