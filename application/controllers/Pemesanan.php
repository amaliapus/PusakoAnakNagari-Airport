<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pemesanan_model');
		$this->load->model('jadwal_model');
		
	}

	// Halaman utama website - data jadwal
	public function index()
	{
		$jadwal = $this->jadwal_model->listing();

		$data = array('title'       => 'Pemesanan Tiket',
					  'jadwal'		=> $jadwal,
					  'isi'	        => 'pemesanan/jadwal'
		);			  
		$this->load->view('layout/wrapper', $data, FALSE);
	}


	// Halaman utama website - data pesan (booking)
	public function datapesan($id_jadwal)
	{
		
		$jadwal = $this->jadwal_model->detail($id_jadwal);
		$pemesanan = $this->pemesanan_model->listing();
		
		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_pembeli','Nama pembeli','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('email_pembeli','Email','required|valid_email',
			array(	'required' 		=> '%s harus diisi',
				  	'valid_email' 	=> '%s tidak valid'));

		$valid->set_rules('alamat','Alamat','required', 
			array('required' => '%s harus diisi'));

		$valid->set_rules('tlp','telephone','required', 
			array('required' => '%s harus diisi'));

		$valid->set_rules('metode_pembayaran','metode_pembayaran','required', 
			array('required' => '%s harus diisi'));

		if($valid->run()===FALSE) {
		//end validasi

		$data = array(	'title' 	    => 'Pesan Tiket',
						'pemesanan' 	=>  $pemesanan,
						'jadwal'	    => 	$jadwal,
					  	'isi'	     	=> 	'pemesanan/datapesan'
					  );
		$this->load->view('layout/wrapper', $data, FALSE);

		// Masuk database
		}else{
			$i = $this->input;
			$data = array(	'id_jadwal' 			=> $id_jadwal,						
							'nama_pembeli' 			=> $i->post('nama_pembeli'),
						  	'email_pembeli' 		=> $i->post('email_pembeli'),
							'alamat' 				=> $i->post('alamat'),
							'tlp' 					=> $i->post('tlp'),
							'bandara_berangkat' 	=> $i->post('bandara_berangkat'),
							'bandara_tujuan' 		=> $i->post('bandara_tujuan'),
							'tgl_berangkat' 		=> $i->post('tgl_berangkat'),
							'jam_berangkat' 		=> $i->post('jam_berangkat'),
							'harga_tiket' 			=> $i->post('harga_tiket'),						
							'metode_pembayaran' 	=> $i->post('metode_pembayaran'),
									);
			
			$this->pemesanan_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data pesanan telah disimpan. Pergi ke halaman berikut untuk lakukan KONFIRMASI');
			redirect(base_url('pemesanan'),'refresh');
		}
		// End database
	}

}