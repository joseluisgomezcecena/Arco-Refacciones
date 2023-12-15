<?php
class ItemModel extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function add_item()
	{
		$this->db->select('*');
		$this->db->from('items');
		$this->db->order_by('item_order', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		$result = $query->row();
		$last_order = $result->item_order;
		$new_order = $last_order + 1;


		$data = array(
			'item_name'=>$this->input->post('step'),
			'operation'=>$this->input->post('operation'),
			'item_order'=>$new_order,
		);

		return $this->db->insert('items', $data);
	}


	public function get_items($type)
	{
		$this->db->where('operation', $type);

		$this->db->order_by('item_order', 'ASC');
		return $this->db->get('items')->result();
	}


	public function update_order($new_order)
	{
		if ($new_order == null)
		{
			echo "NEW ORDER IS NULL";
			return;
		}

		foreach ($new_order as $item) {
			$this->db->where('item_id', $item['id'])->update('items', ['item_order' => $item['order']]);
		}
	}
}
// application/controllers/Item.php

