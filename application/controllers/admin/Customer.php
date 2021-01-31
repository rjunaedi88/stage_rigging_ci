<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Customer extends CI_Controller {

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
		$data['title'] = "Data Customer";
		$data['customer'] = $this->Model_customer->tampil_data()->result();


		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/customer');
		$this->load->view('template_admin/footer');
	}

	public function hapus($id)
	{
		$where = array ('id_customer' => $id);
		$this->Model_customer->hapus_data($where, 'tb_customer');

		$this->session->set_flashdata('alert', '<div class="alert alert-danger"><b>Sukses</b>, data berhasil dihapus.<span class="close" data-dismiss="alert">&times;</span></div>');
		redirect('admin/customer/index');
	}
}