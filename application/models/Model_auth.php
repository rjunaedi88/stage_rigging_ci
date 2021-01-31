<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_auth extends CI_Model {

	public function cek_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		return $this->db->get('tb_admin');

	}

	// public function cek_login()
	// {
	// 	$username = set_value('username');
	// 	$password = set_value('password');

	// 	$result = $this->db->where('username', $username)
	// 						->where('password', $password)
	// 						->limit(1)
	// 						->get('tb_admin');

	// 	if ($result->num_rows() > 0){
	// 		return $result->row();
	// 	}else {
	// 		return array();
	// 	}
	// }

	public function update_password($id, $data)
	{
		$this->db->where('id_admin', $id);
		return $this->db->update('tb_admin', $data);
	}
}