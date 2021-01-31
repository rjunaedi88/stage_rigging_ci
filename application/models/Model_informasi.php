<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_informasi extends CI_Model{

	public function tampil_data()
	{
		return $this->db->get('informasi');
	}
}