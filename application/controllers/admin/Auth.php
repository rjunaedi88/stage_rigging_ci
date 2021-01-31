<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller{

	public function login()
	{
		$data['title'] = 'Login';
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi']);
		$this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi']);
		if($this->form_validation->run() == FALSE) {
			$this->load->view('template_admin/header', $data);
			$this->load->view('admin/auth/login');
			$this->load->view('template_admin/footer');
		} else {
			$auth = $this->Model_auth->cek_login($this->input->post('username'), $this->input->post('password'))->row_object();
			if(!$auth) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Username atau Password anda salah !
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
				redirect('admin/auth/login');
			} else {
				$sess_ = array('logged_in' => true, 'a_id' => $auth->id_admin, 'a_global'=>$auth);
				$this->session->set_userdata($sess_);
				redirect('admin/dashboard');
			}

		}
		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('admin/auth/login');
	}
}