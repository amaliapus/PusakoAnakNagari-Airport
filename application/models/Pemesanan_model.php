<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing jadwal	
	public function listing()
	{
		$this->db->select('	booking.*,
							jadwal.bandara_berangkat,
							jadwal.bandara_tujuan,
							jadwal.tgl_berangkat,
							jadwal.jam_berangkat,
							jadwal.tgl_berangkat,
							jadwal.harga_tiket,
							'
						);
		$this->db->from('booking');
		//join
		$this->db->join('jadwal','jadwal.id_jadwal = booking.id_jadwal','left');
		//end join
		$this->db->group_by('booking.id_booking');
		$this->db->order_by('id_booking', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail booking	
	public function detail($id_jadwal)
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->where('id_jadwal', $id_jadwal);
		$this->db->order_by('id_jadwal', 'asc');
		$query = $this->db->get();
		return $query->row();
	}

	//  Tambah -adding datapesan (booking)
	public function tambah($data)
	{
		$this->db->insert('booking', $data);
	}

}

/* End of file pemesanan_model.php */
/* Location: ./application/models/pemesanan_model.php */