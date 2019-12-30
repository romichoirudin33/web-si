<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

	public function get_all()
	{
		return $this->db->get('users')->result();
	}

	public function get_id($id='')
	{
		$this->db->where('id', $id);
		return $this->db->get('users')->row();
	}

	public function create($array_pegawai)
	{
		return $this->db->insert('users', $array_pegawai);
	}

	public function update($array_pegawai='', $id='')
	{
		$this->db->where('id', $id);
		return $this->db->update('users', $array_pegawai);
	}

	public function get_user($username,$pass){
		// $this->db->where('username', $username);
		return $this->db->get_where('users', array('username' => $username, 'password' => $pass))->row_array();
		// select * from users where username = $username AND password = $pass;
	}

}

/* End of file M_User.php */
/* Location: ./application/models/M_User.php */