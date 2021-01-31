<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Beranda extends CI_Controller{

  public function index()
  {
    $data['title'] = 'Home';
    $this->load->view('template/header', $data);
    $this->load->view('home_page');
    $this->load->view('template/footer');
  }
}