<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cara_pesan extends CI_Controller {

	//halaman utama website
	public function index()
	{
		$data = array('title' => 'About Us',
					  'isi'	  => 'cara_pesan/list'
		);			  
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}