<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Katalog extends CI_Controller{

	public function index()
	{
		$data['katalog'] = $this->Model_katalog->tampil_data()->result();
		$data['title'] = "Katalog";
		$this->load->view('template/header', $data);
		$this->load->view('katalog');
		$this->load->view('template/footer');
	}
}