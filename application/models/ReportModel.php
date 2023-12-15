<?php
class ReportModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_reports($start_date = NULL, $end_date = NULL, $work_order_step = NULL)
	{
		if ($work_order_step != NULL) {
			$this->db->where('work_order_step', $work_order_step);
		}

		if ($start_date == NULL && $end_date == NULL) {
			$this->db->order_by('required_date', 'ASC');
			$this->db->where('required_date =', date('Y-m-d'));
			$query = $this->db->get('work_order');
			return $query->result_array();
		}
		elseif ($start_date != NULL && $end_date == NULL) {
			$this->db->where('required_date >=', $start_date);
			$this->db->order_by('required_date', 'ASC');
			$query = $this->db->get('work_order');
			return $query->result_array();
		}
		else
		{
			$this->db->where('required_date >=', $start_date);
			$this->db->where('required_date <=', $end_date);
			$this->db->order_by('required_date', 'ASC');
			$query = $this->db->get('work_order');
			return $query->result_array();
		}

	}


}
