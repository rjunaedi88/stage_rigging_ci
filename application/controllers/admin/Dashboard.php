<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Dashboard extends CI_Controller{

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
		$data['title'] = "Dashboard Admin";
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('template_admin/footer');
	}

	public function up_pass()
	{
		$this->form_validation->set_rules('pass1', 'Password', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('pass2', 'Password', 'trim|required|matches[pass1]');
		if($this->form_validation->run() != true){
			$data['title'] = 'Ubah Password';
			$this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar');
			$this->load->view('admin/ubahpassword');
			$this->load->view('template_admin/footer');
		}else{
			$array = array('password' => MD5($this->input->post('pass1')));
			$update = $this->Model_auth->update_password($this->session->userdata('a_id'), $array);
			$this->session->set_flashdata('alert', '<div class="alert alert-success"><b>Sukses</b>, password berhasil diubah.<span class="close" data-dismiss="alert">&times;</span></div>');
			redirect('admin/dashboard/up_pass');
		}
	}
}