<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Katalog extends CI_Controller{

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
		$data['title'] = 'Katalog';
		$data['katalog'] = $this->Model_katalog->tampil_data()->result();
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/katalog/view', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_katalog()
	{
		$data['title'] = 'Tambah Katalog';
		$this->form_validation->set_rules('nama_katalog', 'Nama', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric');

		if(@$_FILES['userfile']['name'] == ''){
			$this->form_validation->set_rules('userfile', 'Foto', 'required');
		}

		if ($this->form_validation->run() != true){
			$data['title'] = 'Tambah Katalog';
			$this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar');
			$this->load->view('admin/katalog/tambah');
			$this->load->view('template_admin/footer');
		} else {
			$config['upload_path']   = './uploads'; // gambar nya mau di taro di direktori mana ?
			$config['allowed_types'] = 'jpg|jpeg|png'; // gambar nya mau ekstensi apa aja ?
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload()) {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('alert', '<div class="alert alert-danger">Gagal upload</div>');
						redirect('admin/katalog/tambah_katalog');
			} else {
				$id = $this->Model_katalog->generate_id();
				$foto = $this->upload->data();
				$array = array (
					'id_katalog'	=> $id,
					'nama_katalog' 	=> $this->input->post('nama_katalog'),
					'deskripsi'	=> $this->input->post('deskripsi'),
					'harga'		=> $this->input->post('harga'),
					'gambar'		=> $foto['file_name']
				);
				$this->Model_katalog->tambah($array, 'tb_katalog');
				$this->session->set_flashdata('alert', '<div class="alert alert-success"><b>Sukses</b>, data berhasil disimpan.<span class="close" data-dismiss="alert">&times;</span></div>');
				redirect('admin/katalog/index');
			}
			
		}
	}

	public function edit_katalog($id)
	{
		$katalog = $this->Model_katalog->get_data_by_id($id)->result();
		//var_dump($katalog);exit();
		$data['title'] = 'Edit Katalog';
		$data['katalog'] = $katalog;
		//var_dump($data['katalog']);exit();
		$this->form_validation->set_rules('nama_katalog', 'Nama', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric');

		if(@$_FILES['userfile']['name'] == ''){
			$this->form_validation->set_rules('userfile', 'Foto', 'required');
		}

		if ($this->form_validation->run() != true){
			$data['pheader'] = 'Edit Katalog';
			$this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar');
			$this->load->view('admin/katalog/edit', $data);
			$this->load->view('template_admin/footer');
		} else {
			$config['upload_path']   = './uploads'; // gambar nya mau di taro di direktori mana ?
			$config['allowed_types'] = 'jpg|jpeg|png'; // gambar nya mau ekstensi apa aja ?
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload()) {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('alert', '<div class="alert alert-danger">Gagal upload</div>');
						redirect('admin/katalog/tambah_katalog');
			} else {
				$foto = $this->upload->data();
				$array = array (
					'id_katalog'	=>$this->input->post('id_katalog'),
					'nama_katalog' 	=> $this->input->post('nama_katalog'),
					'deskripsi'		=> $this->input->post('deskripsi'),
					'harga'			=> $this->input->post('harga'),
					'gambar'		=> $foto['file_name']
				);
				$this->Model_katalog->update($id, $array);
				$this->session->set_flashdata('alert', '<div class="alert alert-success"><b>Sukses</b>, data berhasil diedit.<span class="close" data-dismiss="alert">&times;</span></div>');
				redirect('admin/katalog/index');
			}
			
		}
	}


	public function hapus($id)
	{
		$where = array ('id_katalog' => $id);
		$this->Model_katalog->delete($where, 'tb_katalog');

		$this->session->set_flashdata('alert', '<div class="alert alert-danger"><b>Sukses</b>, data berhasil dihapus.<span class="close" data-dismiss="alert">&times;</span></div>');
		redirect('admin/katalog/index');
	}
}