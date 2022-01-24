<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('booking_model');
		$this->load->model('jadwal_model');
		// Proteksi halaman
		$this->simple_login->cek_login();
	}

	// Data booking
	public function index()
	{
		$booking = $this->booking_model->listing();

		

		$data = array(	'title'		=> 'Data Booking',
						'booking'	=> $booking,
						// 'jadwal'    => $jadwal,
						'isi'		=> 'admin/booking/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


	// Edit booking
	public function edit($id_booking)
	{
		$booking = $this->booking_model->detail($id_booking);

		// Ambil data dari jadwal
		$jadwal = $this->jadwal_model->listing();

		// Validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_pembeli','Nama lengkap','required',
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
		// End validasi

		$data = array(	'title' 	=> 'Edit Booking: ' .$booking->nama_pembeli,
						'booking' 	=>  $booking,
						'jadwal'	=> 	$jadwal,
					  	'isi'	  	=> 	'admin/booking/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Masuk database
		}else{
			$i = $this->input;
			$data = array(	'id_booking' 			=> $id_booking,
							'bandara_tujuan' 		=> $i->post('bandara_tujuan'),
							'tgl_berangkat' 		=> $i->post('tgl_berangkat'),							
							'nama_pembeli' 			=> $i->post('nama_pembeli'),
						  	'email_pembeli' 		=> $i->post('email_pembeli'),
							'alamat' 				=> $i->post('alamat'),
							'tlp' 					=> $i->post('tlp'),
							'metode_pembayaran' 	=> $i->post('metode_pembayaran'),

									);
			
			$this->booking_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diedit');
			redirect(base_url('admin/booking'),'refresh');
		}
		// End database
	}


	//  Delete booking
	public function delete($id_booking)
	{
		$data = array('id_booking' => $id_booking);
		$this->booking_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/booking'),'refresh');
	}

}

/* End of file Booking.php */
/* Location: ./application/controllers/admin/Booking.php */