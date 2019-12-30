<?php

class Mahasiswa extends CI_Controller
{
    public function d3si()
    {
        $data['nim'] = '1901010001';
        $data['nama'] = 'Pahrul Irfan';
        $data['umur'] = '29';

        $this->load->view('v_d3si', $data);
    }

    public function d3rpl()
    {

        $data['nama'] = 'Yudistira Telat';
        $data['jurusan'] = 'D3 RPL';

        $this->load->view('v_d3rpl', $data);
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }
}