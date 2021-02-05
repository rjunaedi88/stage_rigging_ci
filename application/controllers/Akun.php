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
		// var_dump($akun);exit();
		$data['akun'] = $akun;
		$data['title'] = 'Akun';

		$this->load->view('template/header', $data);
		$this->load->view('akun', $data);
		$this->load->view('template/footer');
		
	}

	public function edit_akun($id=null)
	{
		$akun = $this->Model_customer->getDataById($this->session->userdata('c_id'))->row_object();

		$this->form_validation->set_rules('nama_customer', 'Nama', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required|numeric');
		$this->form_validation->set_rules('alamat', ' Alamat', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if($this->form_validation->run() != true){
			$data['title'] = 'Edit Profil';
			$data['akun'] = $akun;
	    	$this->load->view('template/header', $data);
	    	$this->load->view('edit_profil');
	    	$this->load->view('template/footer');
		} else {
			$array = array(
						'nama_customer'	=> $this->input->post('nama_customer'),
						'username'		=> $this->input->post('username'),
						'telepon'		=> $this->input->post('telepon'),
						'alamat'		=> $this->input->post('alamat'),
						'email'			=> $this->input->post('email')
					);
			// var_dump($array);exit();
			$this->Model_customer->edit($id,$array);
			$this->session->set_flashdata('alert', '<div class="alert alert-success"><b>Sukses</b>, data berhasil disimpan.<span class="close" data-dismiss="alert">&times;</span></div>');
			redirect('akun/index');
		}

	}
}