<?php
class CategoryModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_all()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('par_cat', 'par_cat.cat = category.category_id', 'left');
		$this->db->join('parent_category', 'parent_category.parent_id = par_cat.parent', 'left');
		$query = $this->db->get();
		return $query->result_array();
	}


	public function get_categories()
	{
		$this->db->join('par_cat', 'par_cat.cat = category.category_id', 'left');
		$this->db->join('parent_category', 'parent_category.parent_id = par_cat.parent', 'left');
		$this->db->order_by('category_name');
		$query = $this->db->get('category');
		return $query->result_array();
	}


	public function get_subcategories($category_id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('par_cat', 'par_cat.cat = category.category_id', 'left');
		$this->db->join('parent_category', 'parent_category.parent_id = par_cat.parent', 'left');
		$this->db->where('parent_category.parent_id', $category_id);
		$query = $this->db->get();
		return $query->result_array();
	}



	public function get_category($id)
	{
		$query = $this->db->get_where('category', array('category_id' => $id));
		return $query->row_array();
	}


	public function get_category_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('par_cat', 'par_cat.cat = category.category_id', 'left');
		$this->db->join('parent_category', 'parent_category.parent_id = par_cat.parent', 'left');
		$this->db->where('category_id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}


	public function get_category_by_parent($parent)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db-join('par_cat', 'par_cat.cat = category.category_id', 'left');
		$this->db->where('par_cat.parent', $parent);
		$query = $this->db->get();
		return $query->result_array();
	}


	public function get_parent_categories()
	{
		$query = $this->db->get('parent_category');
		return $query->result_array();
	}


	public function get_category_by_name($name, $parent)
	{
		//$query = $this->db->get_where('category', array('category_name' => $name));
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('par_cat', 'par_cat.cat = category.category_id', 'left');
		$this->db->where('category_name', $name);
		$this->db->where('par_cat.parent', $parent);
		$query = $this->db->get();
		$query->row_array();

		//count number of rows
		$count = $query->num_rows();
		if($count > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function get_category_by_name_and_id($name, $id, $parent)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('par_cat', 'par_cat.cat = category.category_id', 'left');
		$this->db->where('category_name', $name);
		$this->db->where('category_id !=', $id);
		$this->db->where('par_cat.parent', $parent);
		$query = $this->db->get();
		$query->row_array();

		//count number of rows
		$count = $query->num_rows();
		if($count > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function create_category($category_image)
	{
		$slug = url_title($this->input->post('name'), 'dash', TRUE);

		$data = array(
			'category_name' => $this->input->post('name'),
			'category_slug' => $slug,
			'category_image'=> $category_image,
		);
		$this->db->insert('category', $data);
		$insert_id = $this->db->insert_id();

		$parent = $this->input->post('parent');
		$data = array(
			'cat' => $insert_id,
			'parent' => $parent,
		);
		return $this->db->insert('par_cat', $data);
	}


	public function update_category($id, $category_image = FALSE)
	{
		$data = array(
			'category_name' => $this->input->post('name'),
			'category_image'=> $category_image,
		);
		$this->db->where('category_id', $id);
		return $this->db->update('category', $data);

		//delete all parent categories
		$this->db->where('cat', $id);
		$this->db->delete('par_cat');

		//insert new parent category
		$parent = $this->input->post('parent');
		$data = array(
			'cat' => $id,
			'parent' => $parent,
		);
		return $this->db->insert('par_cat', $data);
	}


	public function delete_category($id)
	{
		$this->db->where('cat', $id);
		$this->db->delete('par_cat');

		$this->db->where('category_id', $id);
		return $this->db->delete('category');
	}


	/*
	public function count_items($id)
	{
		$this->db->where('category_id', $id);
		$this->db->from('category');
		return $this->db->count_all_results();
	}
	*/

	/*
	public function count_items($id)
	{
		$this->db->where('category_id', $id);
		$this->db->from('category');
		$last_query = $this->db->last_query();
		print_r($last_query);
		//return $this->db->count_all_results();
	}
	*/


}
