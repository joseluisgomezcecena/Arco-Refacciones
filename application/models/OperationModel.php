<?php
class OperationModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_operations()
	{
		$this->db->order_by('operation_name');
		$query = $this->db->get('operation');
		return $query->result_array();
	}

	public function get_operation($id)
	{
		$query = $this->db->get_where('operation', array('operation_id' => $id));
		return $query->row_array();
	}

	public function create_operation()
	{
		$data = array(
			'operation_name' => $this->input->post('name'),
			'operation_notes' => $this->input->post('notes'),
		);

		$this->db->insert('operation', $data);
		return $this->db->insert_id();
	}

	public function add_custom_field($id)
	{
		$data = array(
			'operation' => $id,
			'field_name' => $this->input->post('name'),
			'type' => $this->input->post('type'),
			'notes' => $this->input->post('notes'),
		);

		$this->db->insert('operation_custom_field', $data);
		return $this->db->insert_id();
	}

	public function get_custom_fields($id)
	{
		$this->db->order_by('field_name');
		$query = $this->db->get_where('operation_custom_field', array('operation' => $id));
		return $query->result_array();
	}

}
