<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfirmasi_model');
		$this->load->model('jadwal_model');
		// Proteksi halaman
		$this->simple_login->cek_login();
	}

	// Data konfirmasi
	public function index()
	{
		$konfirmasi = $this->konfirmasi_model->listing();

		

		$data = array(	'title'			=> 'Data Konfirmasi',
						'konfirmasi'	=> $konfirmasi,
						// 'jadwal'    => $jadwal,
						'isi'			=> 'admin/konfirmasi/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


	// Edit konfirmasi
	public function edit($id_konfirmasi)
	{
		$konfirmasi = $this->konfirmasi_model->detail($id_konfirmasi);

		// Ambil data dari jadwal
		$jadwal = $this->jadwal_model->listing();

		// Validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_pembeli','Nama lengkap','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('email_pembeli','Email','required|valid_email',
			array(	'required' 		=> '%s harus diisi',
				  	'valid_email' 	=> '%s tidak valid'));

		$valid->set_rules('tlp','Telephone','required', 
			array('required' => '%s harus diisi'));

		$valid->set_rules('tgl_pembayaran','Tanggal Pembayaran','required', 
			array('required' => '%s harus diisi'));

		$valid->set_rules('atas_nama','Atas Nama','required', 
			array('required' => '%s harus diisi'));

		$valid->set_rules('rekening','rekening','required', 
			array('required' => '%s harus diisi'));

		$valid->set_rules('nominal_transfer','Nominal Transfer','required', 
			array('required' => '%s harus diisi'));

		$valid->set_rules('metode_pembayaran','Metode Pembayaran','required', 
			array('required' => '%s harus diisi'));

		$valid->set_rules('status');


		if($valid->run()===FALSE) {
		// End validasi

		$data = array(	'title' 		=> 'Edit Konfirmasi: ', 
						'konfirmasi' 	=>  $konfirmasi,
						'jadwal'		=> 	$jadwal,
					  	'isi'	  		=> 	'admin/konfirmasi/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Masuk database
		}else{
			$i = $this->input;
			$data = array(	'id_konfirmasi' 		=> $id_konfirmasi,
							'tgl_pembayaran' 		=> $i->post('tgl_pembayaran'),							
							'nama_pembeli' 			=> $i->post('nama_pembeli'),
						  	'email_pembeli' 		=> $i->post('email_pembeli'),
							'tlp' 					=> $i->post('tlp'),
							'tgl_pembayaran' 		=> $i->post('tgl_pembayaran'),
							'atas_nama' 			=> $i->post('atas_nama'),
							'rekening' 				=> $i->post('rekening'),
							'nominal_transfer' 		=> $i->post('nominal_transfer'),
							'metode_pembayaran' 	=> $i->post('metode_pembayaran'),
							'status' 				=> $i->post('status'),
									);
			
			$this->konfirmasi_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diedit');
			redirect(base_url('admin/konfirmasi'),'refresh');
		}
		// End database
	}


	//  Delete konfirmasi
	public function delete($id_konfirmasi)
	{
		$data = array('id_konfirmasi' => $id_konfirmasi);
		$this->konfirmasi_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/konfirmasi'),'refresh');
	}

}

/* End of file Konfirmasi.php */
/* Location: ./application/controllers/admin/Konfirmasi.php */