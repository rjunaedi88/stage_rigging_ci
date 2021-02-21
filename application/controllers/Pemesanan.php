<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pemesanan extends CI_Controller{

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

	public function index($id=null)
	{
		$katalog = $this->Model_katalog->get_data_by_id($id)->row_object();
		$customer = $this->Model_customer->getDataById($this->session->userdata('c_id'))->row_object();
		
		$nama_katalog = $katalog->nama_katalog;
		$deskripsi = $katalog->deskripsi;
		$harga = $katalog->harga;
		$nama_customer = $customer->nama_customer;
		$alamat	= $customer->alamat;
		$telepon = $customer->telepon;

		if(!$katalog){
			redirect (base_url());
		}

		// $this->form_validation->set_rules('tanggal_pemakaian', 'Tanggal Pemesanan', 'trim|required|is_unique[tb_pemesanan.tanggal_pemakaian]', ['is_unique' => 'Pemesanan di tanggal ini sudah penuh']);
		$this->form_validation->set_rules('tanggal_selesai', 'Tanggal Pengembalian', 'trim|required');
		$this->form_validation->set_rules('alamat_event', 'Alamat Event', 'trim|required');

		if ($this->form_validation->run() == false){
			$data['title'] = 'Pemesanan';
			$data['customer'] = $customer;
			$data['katalog'] = $katalog;

			$this->load->view('template/header', $data);
			$this->load->view('pemesanan', $data);
			$this->load->view('template/footer', $data);
		} else {
			$id = $this->Model_pemesanan->generate_id();
			$tanggal_pemakaian = strtotime($this->input->post('tanggal_pemakaian'));
			$tanggal_selesai = strtotime($this->input->post('tanggal_selesai'));
			$interval = $tanggal_selesai - $tanggal_pemakaian;
			$hari = floor($interval / (60*60*24));
			$total_harga = $harga * $hari;

			$array = array(
					'id_pesanan'		=> $id,
					'status_pembayaran' => 'menunggu pembayaran',
					'id_katalog'		=> $katalog->id_katalog,
					'id_customer'		=> $this->session->userdata('c_id'),
					'wilayah'			=> $this->input->post('wilayah'),
					'alamat_event'		=> $this->input->post('alamat_event'),
					'tanggal_pemakaian'		=> $this->input->post('tanggal_pemakaian'),
					'tanggal_selesai'	=> $this->input->post('tanggal_selesai'),
					'total_harga'		=> $total_harga,
					'bukti_pembayaran'	=> 'default-bukti.jpg',
					'tanggal_pemesanan'	=> date("Y-m-d")
				);
			$cek = $this->db->get_where('tb_pemesanan', array('id_katalog' => $katalog->id_katalog, 'tanggal_pemakaian' => $this->input->post('tanggal_pemakaian')));
			$k = $array['wilayah'];
			if($k == "non jabodetabek"){
				$this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Mohon maaf pemesanan hanya untuk wilayah jabodetabek
					</div>');
				redirect(base_url().'pemesanan/index/' . $array['id_katalog']);
			}else{
				if($cek->num_rows() > 0){
					$this->session->set_flashdata('alert', '<div class="alert alert-danger">Gagal, paket yang Anda pesan sudah full booking, Silahkan pilih katalog lain<span class="close" data-dismiss="alert">&times;</span></div>');
					     redirect(base_url().'pemesanan/index/' . $array['id_katalog']);
				}else {
				$k = $this->Model_pemesanan->insert_data($array);
				$this->session->set_flashdata('alert', '<div class="alert alert-success">Sukses, Pemesanan berhasil<span class="close" data-dismiss="alert">&times;</span></div>');
				redirect(base_url().'pemesanan/invoice/'.$id);
					
				}
			}
			
		}
	}

	public function invoice($id=null)
	{
		$invoice = $this->Model_pemesanan->get_data_by_id($id)->row_object();
		
		$tanggal_pemakaian = strtotime($invoice->tanggal_pemakaian);
		$tanggal_selesai = strtotime($invoice->tanggal_selesai);
		$interval = $tanggal_selesai - $tanggal_pemakaian;
		$hari = floor($interval / (60*60*24));

		// menghitung harga
		$harga = $invoice->harga;
		$total_harga = $harga * $hari;
		// $tipe_pembayaran = $invoice->tipe_pembayaran;
		// if($tipe_pembayaran == "dp"){
		// 	$total_harga = $harga * 0.2 * $hari;
		// } else {
			
		// }

		$data['title'] = 'Pembayaran';
		$data['invoice'] = $invoice;
		$data['hari'] = $hari;
		$data['total_harga'] = $total_harga;
		$this->load->view('template/header', $data);
		$this->load->view('invoice', $data);
		$this->load->view('template/footer');
	}
}