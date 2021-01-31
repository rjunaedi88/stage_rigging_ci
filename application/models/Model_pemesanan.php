<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Model_pemesanan extends CI_Model {

	public function generate_id()
	{
		$a = $this->db->query("SELECT MAX(RIGHT(id_pesanan,3)) AS id FROM tb_pemesanan")->row_object();
		return 'TR'.date('Ym').sprintf("%03s", $a->id + 1);
	}

	public function insert_data($data)
	{
		return $this->db->insert('tb_pemesanan', $data);
	}

	public function get_data()
	{
		$this->db->select('*');
		$this->db->from('tb_pemesanan');
		$this->db->join('tb_customer', 'tb_customer.id_customer = tb_pemesanan.id_customer', 'left');
		$this->db->join('tb_katalog', 'tb_katalog.id_katalog = tb_pemesanan.id_katalog', 'left');
		return $this->db->get();
	}

	public function get_data_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('tb_pemesanan');
		$this->db->join('tb_customer', 'tb_customer.id_customer = tb_pemesanan.id_customer', 'left');
		$this->db->join('tb_katalog', 'tb_katalog.id_katalog = tb_pemesanan.id_katalog', 'left');
		$this->db->where('id_pesanan', $id);
		return $this->db->get();
	}

	public function get_data_by_id_status($id)
	{
		$this->db->select("id_pesanan");
		$this->db->from("tb_pemesanan");
		$this->db->where("id_customer", $id);
		return $this->db->get();
	}

	public function update($id, $data)
	{
		$this->db->where('id_pesanan', $id);
		$this->db->update('tb_pemesanan', $data);
	}

	public function cetak_laporan_pesanan()
	{
		$this->db->order_by('id_pesanan', 'desc');
		if($this->input->get('tgl1') != '' && $this->input->get('tgl2') != '') {
			$this->db->where('tanggal_pesan >=', $this->input->get('tgl1'));
			$this->db->where('tanggal_pesan <=', $this->input->get('tgl2'));
		}
		$this->db->join('tb_customer', 'tb_customer.id_customer = tb_pemesanan.id_customer', 'left');
		return $this->db->get('tb_pemesanan');
	}
}