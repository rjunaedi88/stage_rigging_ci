<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_customer extends CI_Model {

	public function cek_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		return $this->db->get('tb_customer');

	}

	public function generate_id()
	{
		$a = $this->db->query("SELECT MAX(RIGHT(id_customer, 3)) AS id FROM tb_customer")->row_object();
		return sprintf("%03s", $a->id + 1);
	}

	public function tambahDataCustomer($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function getDataByid($id)
	{
		$this->db->where('id_customer', $id);
		return $this->db->get('tb_customer');
	}


	//admin
	public function tampil_data()
	{
		return $this->db->get('tb_customer');
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function cetak_laporan_customer()
	{
		$this->db->order_by('id_customer', 'desc');
		return $this->db->get('tb_customer');
	}

	public function edit($id, $data)
	{
		// var_dump($id);exit();
		$this->db->where('id_customer', $id);
		return $this->db->update('tb_customer', $data);
	}
}