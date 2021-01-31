<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Login';
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi']);
		$this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi']);
		if($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('login');
			$this->load->view('template/footer');
		} else {
			$auth = $this->Model_customer->cek_login($this->input->post('username'), $this->input->post('password'))->row_object();
		
			if(!$auth) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Username atau Password anda salah !
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
				redirect('login');
			} else {
				$sess_ = array('c_login' => true, 'c_id' => $auth->id_customer, 'c_global' => $auth );
				$this->session->set_userdata($sess_);
				redirect('beranda');
			}

		}
	}

	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('beranda');
	}
}