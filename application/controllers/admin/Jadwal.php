
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('jadwal_model');
		// Proteksi halaman
		$this->simple_login->cek_login();
	}

	// Data jadwal
	public function index()
	{
		$jadwal = $this->jadwal_model->listing();

		$data = array(	'title'		=> 'Data Jadwal',
						'jadwal'	=> $jadwal,
						'isi'		=> 'admin/jadwal/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah jadwal
	public function tambah()
	{
		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_pesawat','Nama Pesawat','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('bandara_berangkat','Bandara Berangkat','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('bandara_tujuan','Bandara Tujuan','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('tgl_berangkat','Tanggal Berangkat','required',
			array('required' => '%s harus diisi'));
		
		$valid->set_rules('jam_berangkat','Jam Berangkat','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('harga_tiket','Harga Tiket','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('seat','seat','required',
			array('required' => '%s harus diisi'));


		if($valid->run()===FALSE) {
		// End validasi

		$data = array(	'title' 	=> 'Tambah Jadwal',
					  	'isi'	  	=> 'admin/jadwal/tambah');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Masuk database
		}else{
			$i = $this->input;
			$data = array(	'nama_pesawat' 			=> $i->post('nama_pesawat'),
						  	'bandara_berangkat' 	=> $i->post('bandara_berangkat'),
						  	'bandara_tujuan' 		=> $i->post('bandara_tujuan'),
						  	'tgl_berangkat' 		=> $i->post('tgl_berangkat'),
						  	'jam_berangkat' 		=> $i->post('jam_berangkat'),
						  	'harga_tiket' 			=> $i->post('harga_tiket'),
						  	'seat' 			=> $i->post('seat'),
						  );

			$this->jadwal_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data telah ditambah');
			redirect(base_url('admin/jadwal'),'refresh');
		}
		//end database
	}


	// Edit jadwal
	public function edit($id_jadwal)
	{
		$jadwal = $this->jadwal_model->detail($id_jadwal);

		// Validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_pesawat','Nama Pesawat','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('bandara_berangkat','Bandara Berangkat','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('bandara_tujuan','Bandara Tujuan','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('tgl_berangkat','Tanggal Berangkat','required',
			array('required' => '%s harus diisi'));
		
		$valid->set_rules('jam_berangkat','Jam Berangkat','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('harga_tiket','Harga Tiket','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('seat','Seat','required',
			array('required' => '%s harus diisi'));


		if($valid->run()===FALSE) {
		// End validasi

		$data = array(	'title' 	=> 'Edit Jadwal',
						'jadwal' 	=>  $jadwal,
					  	'isi'	  	=> 'admin/jadwal/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Masuk database
		}else{
			$i = $this->input;
			$data = array(	'id_jadwal' 			=> $id_jadwal,
							'nama_pesawat' 			=> $i->post('nama_pesawat'),
						  	'bandara_berangkat' 	=> $i->post('bandara_berangkat'),
						  	'bandara_tujuan' 		=> $i->post('bandara_tujuan'),
						  	'tgl_berangkat' 		=> $i->post('tgl_berangkat'),
						  	'jam_berangkat' 		=> $i->post('jam_berangkat'),
						  	'harga_tiket'		 	=> $i->post('harga_tiket'),
						  	'seat'		 	=> $i->post('seat'),
						  );
			$this->jadwal_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diedit');
			redirect(base_url('admin/jadwal'),'refresh');
		}
		// End database
	}


	//  Delete jadwal
	public function delete($id_jadwal)
	{
		$data = array('id_jadwal' => $id_jadwal);
		$this->jadwal_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/jadwal'),'refresh');
	}

}

/* End of file Jadwal.php */
/* Location: ./application/controllers/admin/Jadwal.php */