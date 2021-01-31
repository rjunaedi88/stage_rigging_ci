<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Registrasi extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('nama_customer', 'Nama', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required|numeric');
		$this->form_validation->set_rules('alamat', ' Alamat', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[tb_customer.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[50]');
		
		if(@$_FILES['userfile']['name'] == ''){
			$this->form_validation->set_rules('foto_ktp', 'Foto ktp', 'trim|required');
		}

		if ($this->form_validation->run() == FALSE){
			$data['title'] = 'Register';
			$this->load->view('template/header', $data);
			$this->load->view('registrasi');
			$this->load->view('template/footer');
		} else {
			$config['upload_path']   = './uploads'; // gambar nya mau di taro di direktori mana ?
			$config['allowed_types'] = 'jpg|jpeg|png'; // gambar nya mau ekstensi apa aja ?
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload()) {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('alert', '<div class="alert alert-danger">Gagal upload</div>');
						redirect('registrasi');
			} else {
				$fotoKtp = $this->upload->data(); 
				$id = $this->Model_customer->generate_id();
				//var_dump($id);exit();

				$array = array(
						'id_customer'	=> $id,
						'nama_customer'	=> $this->input->post('nama_customer'),
						'username'	=> $this->input->post('username'),
						'telepon'		=> $this->input->post('telepon'),
						'alamat'		=> $this->input->post('alamat'),
						'email'			=> $this->input->post('email'),
						'password'		=> MD5($this->input->post('password')),
						'foto_ktp'		=> $fotoKtp['file_name']
					);

				$this->Model_customer->tambahDataCustomer($array, 'tb_customer');
				$this->session->set_flashdata('pesan', '<div class="alert alert-success"><b>Sukses</b>, data berhasil disimpan, Silahkan login<span class="close" data-dismiss="alert">&times;</span></div>');
				redirect('login');
			}
		}

	}
}