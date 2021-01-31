<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pengguna extends CI_Model {

	public function tampil_data()
	{
		return $this->db->get('tb_admin');
	}

	public function generate_id()
	{
		$a = $this->db->query("SELECT MAX(RIGHT(id_admin, 3)) AS id FROM tb_admin")->row_object();
		return sprintf("%03s", $a->id + 1);
	}

	public function tambah($data)
	{
		return $this->db->insert('tb_admin', $data);
	}

	public function edit($id, $data)
	{
		$this->db->where('id_admin', $id);
		return $this->db->update('tb_admin', $data);
	}

	public function get_data_by_id($id){
		$this->db->where('id_admin', $id);
		return $this->db->get('tb_admin');
	}

	public function hapus($id)
	{
		$this->db->where('id_admin', $id);
		return $this->db->delete('tb_admin');
	}
}