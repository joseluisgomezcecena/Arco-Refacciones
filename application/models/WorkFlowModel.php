<?php
class WorkFlowModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_workflows()
	{
		$this->db->order_by('work_flow_name');
		$query = $this->db->get('work_flow');
		return $query->result_array();
	}

	public function create_workflow()
	{
		$data = array(
			'work_flow_name' => $this->input->post('name'),
			'work_flow_notes' => $this->input->post('notes'),
		);

		$this->db->insert('work_flow', $data);
		return $this->db->insert_id();
	}
}
