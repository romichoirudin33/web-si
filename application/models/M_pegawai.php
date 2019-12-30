<?php

class M_pegawai extends CI_Model
{
	public function getAll()
	{
		return $this->db->get('tbl_pegawai')->result();
	}

	public function getId($id='')
	{
		$this->db->where('id', $id);
		return $this->db->get('tbl_pegawai')->row();
	}

	public function create($array_pegawai)
	{
		return $this->db->insert('tbl_pegawai', $array_pegawai);
	}

	public function update($array_pegawai='', $id='')
	{
		$this->db->where('id', $id);
		return $this->db->update('tbl_pegawai', $array_pegawai);
	}
}