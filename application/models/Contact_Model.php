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
}