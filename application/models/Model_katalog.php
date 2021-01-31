<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_katalog extends CI_Model{

	public function tampil_data()
	{
		return $this->db->get('tb_katalog');
	}

	public function tambah($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function generate_id()
	{
		$a = $this->db->query("SELECT MAX(RIGHT(id_katalog, 3)) AS id FROM tb_katalog")->row_object();
		return sprintf("%03s", $a->id + 1);
	}

	public function get_data_by_id($id)
	{
		$this->db->where('id_katalog', $id);
		return $this->db->get('tb_katalog');

	}

	public function update($id, $data)
	{
		$this->db->where('id_katalog', $id);
		$this->db->update('tb_katalog', $data);
	}

	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}