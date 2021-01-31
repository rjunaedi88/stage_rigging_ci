<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

class Contact extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Contact Us';
	    $this->load->view('template/header', $data);
	    $this->load->view('contact');
	    $this->load->view('template/footer');
	}
}