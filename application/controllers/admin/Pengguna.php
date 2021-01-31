<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengguna extends CI_Controller {

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
		$data['title'] = "Data Pengguna";
		$data['pengguna'] = $this->Model_pengguna->tampil_data()->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/pengguna/view', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_pengguna()
	{
		$this->form_validation->set_rules('nama_admin', 'Nama', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('role_admin', 'role', 'required');

		if ($this->form_validation->run() != true){
			$data['title'] = 'Tambah Pengguna';
			$this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar');
			$this->load->view('admin/pengguna/tambah');
			$this->load->view('template_admin/footer');

		} else {
			$id = $this->Model_pengguna->generate_id();
			$array = array (
				'id_admin'		=> $id,
				'nama_admin' 	=> $this->input->post('nama_admin'),
				'username'		=> $this->input->post('username'),
				'email'			=> $this->input->post('email'),
				'password'		=> md5('123456'),
				'role_admin'	=> $this->input->post('role_admin')
			);
			$this->Model_pengguna->tambah($array);
			$this->session->set_flashdata('alert', '<div class="alert alert-success"><b>Sukses</b>, data berhasil disimpan.<span class="close" data-dismiss="alert">&times;</span></div>');
			redirect('admin/pengguna/index');
		}
	}

	public function edit_pengguna($id=null)
	{
		$d = $this->Model_pengguna->get_data_by_id($id)->row_object();
		if(!$d){
			redirect('admin/pengguna');
		}
		$this->form_validation->set_rules('nama_admin', 'Nama', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('role_admin', 'role', 'required');

		if ($this->form_validation->run() != true){
			$data['title'] = 'Edit Pengguna';
			$data['d'] = $d;
			$this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar');
			$this->load->view('admin/pengguna/edit', $data);
			$this->load->view('template_admin/footer');

		} else {
			//$id = $this->Model_pengguna->generate_id();
			$array = array (
				'nama_admin' 	=> $this->input->post('nama_admin'),
				'username'		=> $this->input->post('username'),
				'email'			=> $this->input->post('email'),
				'password'		=> md5('123456'),
				'role_admin'	=> $this->input->post('role_admin')
			);
			$this->Model_pengguna->edit($id,$array);
			$this->session->set_flashdata('alert', '<div class="alert alert-success"><b>Sukses</b>, data berhasil disimpan.<span class="close" data-dismiss="alert">&times;</span></div>');
			redirect('admin/pengguna/index');
		}
	}

	public function hapus($id)
	{
		$this->Model_pengguna->hapus($id);
		redirect('admin/pengguna');
	}
}