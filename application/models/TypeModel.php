<?php
class TypeModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_types()
	{
		$this->db->order_by('type_name', 'ASC');
		return $this->db->get('types')->result();
	}

	public function add_type()
	{
		$data = array(
			'type_name'=>$this->input->post('name'),
			'type_description'=>$this->input->post('description'),
		);

		return $this->db->insert('types', $data);
	}


	public function get_type($id)
	{
		$this->db->where('type_id', $id);
		return $this->db->get('types')->row();
	}


	public function update_type($id)
	{
		$data = array(
			'type_name'=>$this->input->post('name'),
			'type_description'=>$this->input->post('description'),
		);

		$this->db->where('type_id', $id);
		return $this->db->update('types', $data);
	}


	public function delete_type($id)
	{
		$this->db->where('type_id', $id);
		return $this->db->delete('types');
	}

}
