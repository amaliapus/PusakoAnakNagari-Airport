<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing all booking	
	public function listing()
	{
		$this->db->select('booking.*,
							jadwal.id_jadwal,
							jadwal.bandara_tujuan,
							jadwal.tgl_berangkat
				');
		$this->db->from('booking');
		// JOIN
		$this->db->join('jadwal', 'jadwal.id_jadwal = booking.id_jadwal', 'left');
		// END JOIN
		$this->db->order_by('id_booking', 'desc');
		$this->db->group_by('booking.id_booking');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail all booking	
	public function detail($id_booking)
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
		$this->db->where('id_booking', $data['id_booking']);
		$this->db->update('booking', $data);
	}

	//  Delete
	public function delete($data)
	{
		$this->db->where('id_booking', $data['id_booking']);
		$this->db->delete('booking',$data);
	}


}

/* End of file booking_model.php */
/* Location: ./application/models/booking_model.php */