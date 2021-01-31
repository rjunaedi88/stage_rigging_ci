<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Laporan_pesanan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');

		if ($this->session->userdata('logged_in') != true){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Harap Login dahulu !
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/auth/login');
		}
	}

	public function index()
	{
		$data['title'] = "Laporan pesanan";
		$data['content'] = 'admin/laporan/laporan_pesanan';
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/laporan/laporan_pesanan');
		$this->load->view('template_admin/footer');

	}

	public function cetak_laporan_pesanan()
	{
		$pesanan = $this->Model_pemesanan->cetak_laporan_pesanan()->result_array();
		//var_dump($pesanan);exit();
		$data['pemesanan'] = $pesanan;
		$data['pheader'] = 'Laporan Pemesanan Stage Rigging';
		$data['content'] = 'admin/laporan/cetak_laporan_pesanan';
		$this->load->view('template_admin/print_page', $data);
	}

	public function cetak_laporan_customer()
	{
		$cust = $this->Model_customer->cetak_laporan_customer()->result_array();
		//var_dump($cust);exit();
		$data['customer'] = $cust;
		$data['pheader'] = 'Laporan Customer Stage Rigging';
		$data['content'] = 'admin/laporan/cetak_laporan_customer';
		$this->load->view('admin/laporan/cetak_laporan_customer', $data);
	}
}