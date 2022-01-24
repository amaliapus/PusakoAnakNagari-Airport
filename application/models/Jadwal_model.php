<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing all jadwal	
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->order_by('id_jadwal', 'desc');
		// $this->db->group_by('jadwal.id_jadwal');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail all jadwal	
	public function detail($id_jadwal)
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->where('id_jadwal', $id_jadwal);
		$this->db->order_by('id_jadwal', 'asc');
		$query = $this->db->get();
		return $query->row();
	}

	//  Tambah
	public function tambah($data)
	{
		$this->db->insert('jadwal', $data);
	}

	//  Edit
	public function edit($data)
	{
		$this->db->where('id_jadwal', $data['id_jadwal']);
		$this->db->update('jadwal', $data);
	}

	//  Delete
	public function delete($data)
	{
		$this->db->where('id_jadwal', $data['id_jadwal']);
		$this->db->delete('jadwal',$data);
	}


}

/* End of file jadwal_model.php */
/* Location: ./application/models/jadwal_model.php */