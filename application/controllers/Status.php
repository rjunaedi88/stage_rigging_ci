<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Status extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if( $this->session->userdata('c_login') != true ) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Harap Login dahulu !
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('login');
		}

	}

	
	public function index()
	{
		$akun = $this->Model_customer->getDataById($this->session->userdata('c_id'))->row_object();
		$id_cust = $akun->id_customer;
		$id = $this->Model_pemesanan->get_data_by_id_status($id_cust)->row_object();
		$invoice = $this->Model_pemesanan->get_data_by_id($id->id_pesanan)->row_object();
		if(!$invoice){
			$this->session->set_flashdata('alert', '<div class="alert alert-danger">Maaf, Anda belum melakukan pemesanan, Silahkan pesan katalog dibawah!<span class="close" data-dismiss="alert">&times;</span></div>');
			redirect('katalog');
		}
		
		$tanggal_pesan = strtotime($invoice->tanggal_pesan);
		$tanggal_kembali = strtotime($invoice->tanggal_kembali);
		$interval = $tanggal_kembali - $tanggal_pesan;
		$hari = floor($interval / (60*60*24));
		$harga = $invoice->harga;
		$total_harga = $harga * $hari;

		// menghitung harga
		// $tipe_pembayaran = $invoice->tipe_pembayaran;
		// $harga = $invoice->harga;
		// if($tipe_pembayaran == "dp"){
		// 	$total_harga = $harga * 0.2 * $hari;
		// } else {
		// 	$total_harga = $harga * $hari;
		// }

		$data['title'] = 'Status Pemesanan';
		$data['invoice'] = $invoice;
		$data['hari'] = $hari;
		$data['total_harga'] = $total_harga;
		$this->load->view('template/header', $data);
		$this->load->view('status', $data);
		$this->load->view('template/footer');
		
	}

	public function cetak_laporan_pemesanan()
	{
		$akun = $this->Model_customer->getDataById($this->session->userdata('c_id'))->row_object();
		$id_cust = $akun->id_customer;
		$id = $this->Model_pemesanan->get_data_by_id_status($id_cust)->row_object();
		$invoice = $this->Model_pemesanan->get_data_by_id($id->id_pesanan)->row_object();
		
		$tanggal_pesan = strtotime($invoice->tanggal_pesan);
		$tanggal_kembali = strtotime($invoice->tanggal_kembali);
		$interval = $tanggal_kembali - $tanggal_pesan;
		$hari = floor($interval / (60*60*24));
		$harga = $invoice->harga;
		$total_harga = $harga * $hari;

		$data['title'] = 'Cetak Status Pemesanan';
		$data['invoice'] = $invoice;
		$data['hari'] = $hari;
		$data['total_harga'] = $total_harga;
		$this->load->view('cetak_status_pesanan', $data);


		// $cust = $this->Model_customer->cetak_laporan_customer()->result_array();
		//var_dump($cust);exit();
		// $data['customer'] = $cust;
		// $data['pheader'] = 'Laporan Customer Stage Rigging';
		// $data['content'] = 'admin/laporan/cetak_laporan_customer';
		// $this->load->view('admin/laporan/cetak_laporan_customer', $data);
	}
}