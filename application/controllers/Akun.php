<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Akun extends CI_Controller {

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
		$data['akun'] = $akun;
		$data['title'] = 'Akun';

		$this->load->view('template/header', $data);
		$this->load->view('akun', $data);
		$this->load->view('template/footer');
		
	}
}