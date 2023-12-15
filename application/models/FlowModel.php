<?php
class FlowModel extends  CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_flows()
	{
		$this->db->order_by('type_name', 'ASC');
		$query = $this->db->get('types');
		return $query->result_array();
	}


	public function get_flow($id)
	{
		$this->db->where('type_id', $id);
		$query = $this->db->get('types');
		return $query->row_array();
	}


	public function create($flow)
	{
		$data = array(
			'work_order_number'=>$this->input->post('number'),
			'work_order_pn'=>$this->input->post('part_no'),
			'work_order_qty'=>$this->input->post('qty'),
			'required_date'=>$this->input->post('required_date'),
			'work_order_step'=>$this->input->post('work_order_step'),
			'notes'=>$this->input->post('notes'),
			'work_order_type'=>$flow,
		);

		return $this->db->insert('work_order', $data);
	}


	public function update_step($work_order_id, $work_order_step)
	{
		$data = array(
			'work_order_step'=>$work_order_step,
			'wo_id'=>$work_order_id,
		);

		$query =  $this->db->where('wo_id', $work_order_id)->update('work_order', $data);
		#print last query
		//$last = $this->db->last_query();
		//print_r($last);
	}




	public function get_work_orders($flow)
	{
		$this->db->where('work_order_type', $flow);
		$this->db->order_by('required_date', 'ASC');
		$this->db->join('types', 'types.type_id = work_order.work_order_type');
		$this->db->join('items', 'items.item_id = work_order.work_order_step');
		$query =  $this->db->get('work_order');
		return $query->result_array();
	}



}
