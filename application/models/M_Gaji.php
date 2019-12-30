<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Gaji extends CI_Model {

	public function get_all()
	{
		return $this->db->get('gaji')->result();
	}

	public function get_id($id='')
	{
		$this->db->where('id', $id);
		return $this->db->get('gaji')->row();
	}

	public function create($array_pegawai)
	{
		return $this->db->insert('gaji', $array_pegawai);
	}

	public function update($array_pegawai='', $id='')
	{
		$this->db->where('id', $id);
		return $this->db->update('gaji', $array_pegawai);
	}

}

/* End of file M_Gaji.php */
/* Location: ./application/models/M_Gaji.php */