<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pemesanan_model');
		$this->load->model('jadwal_model');
		$this->load->model('konfirmasi_model');
		
	}

	//halaman utama website
	public function index()
	{

		$booking = $this->konfirmasi_model->listingg();

		$data = array('title' 			=> 'Data Konfirmasi',
					  'booking'			=> $booking,
					  'isi'	  			=> 'konfirmasi/list'
		);			  
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Halaman utama website - data pesan (booking)
	public function konfirmasi($id_booking)
	{
		
		$booking = $this->konfirmasi_model->detaill($id_booking);
		$konfirmasi = $this->konfirmasi_model->listing();
		
		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('rekening','Rekening','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('atas_nama','Atas Nama','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('nominal_transfer','Nominal Pembayaran','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('tgl_pembayaran','Tanggal Pembayaran','required',
			array('required' => '%s harus diisi'));


		if($valid->run()===FALSE) {
		//end validasi

		$data = array(	'title' 	    => 'Konfirmasi Tiket',
						'booking' 		=>  $booking,
						'konfirmasi' 	=>  $konfirmasi,
					  	'isi'	     	=> 	'konfirmasi/konfirmasi'
					  );
		$this->load->view('layout/wrapper', $data, FALSE);

		// Masuk database
		}else{
			$i = $this->input;
			$data = array(
							'id_booking' 				=> $id_booking,
							'nama_pembeli' 				=> $i->post('nama_pembeli'),
							'email_pembeli' 			=> $i->post('email_pembeli'),
							'tlp' 						=> $i->post('tlp'),
							'metode_pembayaran' 		=> $i->post('metode_pembayaran'),
							'rekening' 					=> $i->post('rekening'),
							'atas_nama' 				=> $i->post('atas_nama'),
							'nominal_transfer' 			=> $i->post('nominal_transfer'),
							'tgl_pembayaran' 			=> $i->post('tgl_pembayaran'),
							
									);
			
			$this->konfirmasi_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data konfirmasi telah tersimpan. Silahkan tunggu 1x24 jam untuk pengiriman e-Tiket melalui email anda!');
			redirect(base_url('konfirmasi'),'refresh');
		}
		// End database
	}


	//  Delete booking
	public function delete($id_booking)
	{
		$data = array('id_booking' => $id_booking);
		$this->konfirmasi_model->deletee($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('konfirmasi'),'refresh');
	}
}