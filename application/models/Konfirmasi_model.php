<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing all konfirmasi	
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('konfirmasi');
		$this->db->order_by('nama_pembeli', 'asc');
		// $this->db->group_by('konfirmasi.id_konfirmasi');
		$query = $this->db->get();
		return $query->result();
	}

	// Listing all booking	
	public function listingg()
	{
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->order_by('nama_pembeli', 'asc');
		// $this->db->group_by('konfirmasi.id_konfirmasi');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail konfirmasi	
	public function detail($id_konfirmasi)
	{
		$this->db->select('*');
		$this->db->from('konfirmasi');
		$this->db->where('id_konfirmasi', $id_konfirmasi);
		$this->db->order_by('id_konfirmasi', 'asc');
		$query = $this->db->get();
		return $query->row();
	}

	// Detail booking	
	public function detaill($id_booking)
	{
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->where('id_booking', $id_booking);
		$this->db->order_by('id_booking', 'asc');
		$query = $this->db->get();
		return $query->row();
	}

	//  Edit
	public function edit($data)
	{
		$this->db->where('id_konfirmasi', $data['id_konfirmasi']);
		$this->db->update('konfirmasi', $data);
	}

	//tambah gambar
	public function tambah_gambar($data)
	{
		$this->db->insert('gambar', $data);
	}	

	//  Tambah - adding konfirmasi
	public function tambah($data)
	{
		$this->db->insert('konfirmasi', $data);
	}


	//  Delete pemesanan konfirmasi
	public function delete($data)
	{
		$this->db->where('id_konfirmasi', $data['id_konfirmasi']);
		$this->db->delete('konfirmasi',$data);
	}

	//  Delete pemesanan
	public function deletee($data)
	{
		$this->db->where('id_booking', $data['id_booking']);
		$this->db->delete('booking',$data);
	}


}

/* End of file jadwal_model.php */
/* Location: ./application/models/jadwal_model.php */