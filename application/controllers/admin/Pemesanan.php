<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Pemesanan extends CI_Controller {

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
		$data['pemesanan'] = $this->Model_pemesanan->get_data()->result();
		//var_dump($data['pemesanan']);exit();
		$data['title'] = 'Data Pemesanan';

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/pemesanan/view', $data);
		$this->load->view('template_admin/footer');
	}

	public function edit($id)
	{
		$pemesanan = $this->Model_pemesanan->get_data_by_id($id)->result();
		//var_dump($pemesanan);exit();
		$data['pemesanan'] = $pemesanan;
		$data['title'] 	= 'Edit Pemesanan';

		$this->form_validation->set_rules('status_pembayaran', 'Status Pembayaran', 'trim|required');
		//$this->form_validation->set_rules('bukti_pembayaran', 'Bukti Pembayaran', 'trim|required');
		// if(@$_FILES['userfile']['name'] == ''){
		// 	$this->form_validation->set_rules('userfile', 'Bukti Pembayaran', 'required');
		// }
		//var_dump($this->form_validation->run());exit();

		if($this->form_validation->run() != true) {
			$this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar');
			$this->load->view('admin/pemesanan/edit', $data);
			$this->load->view('template_admin/footer');
		} else {
			// $config['upload_path']   = './uploads'; // gambar nya mau di taro di direktori mana ?
			// $config['allowed_types'] = 'jpg|jpeg|png'; // gambar nya mau ekstensi apa aja ?
			// $config['encrypt_name'] = true;
			// $this->load->library('upload', $config);
			// if (!$this->upload->do_upload()) {
			// 	$error = array('error' => $this->upload->display_errors());
			// 	$this->session->set_flashdata('alert', '<div class="alert alert-danger">Gagal upload</div>');
			// 			redirect('admin/pemesanan/edit');
			// }else {
				// $bukti = $this->upload->data();
				$array = array (
						'id_pesanan'	=> $this->input->post('id_pesanan'),
						'status_pembayaran'	=> $this->input->post('status_pembayaran')
					);
				//var_dump($bukti);exit();
				$this->Model_pemesanan->update($id, $array);
				$this->session->set_flashdata('alert', '<div class="alert alert-success"><b>Sukses</b>, data berhasil diedit.<span class="close" data-dismiss="alert">&times;</span></div>');
				redirect('admin/pemesanan/index');
			// }
		}
	}
}