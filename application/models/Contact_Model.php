<?php
class Contact_Model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function save_contact($data)
	{
		// Insert data into the database
		$this->db->insert('messages', $data);

		// Check if the insert was successful
		if ($this->db->affected_rows() > 0) {
			return array('status' => 'success', 'message' => 'Contact form submitted successfully.');
		} else {
			return array('status' => 'error', 'message' => 'Failed to submit contact form.');
		}
	}


	public function get_all()
	{
		$this->db->select('*');
		$this->db->from('messages');
		$this->db->order_by('message_id', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}


	public function get_message($id)
	{
		$this->db->select('*');
		$this->db->from('messages');
		$this->db->where('message_id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}


	public function delete($id)
	{
		$this->db->where('message_id', $id);
		$this->db->delete('messages');
	}


}
