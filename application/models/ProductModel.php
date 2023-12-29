<?php
class ProductModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_products()
	{
		/*
		$this->db->order_by('product_name');
		$query = $this->db->get('products');
		*/

		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('category_product', 'category_product.cp_product_id = products.product_id', 'left');
		$this->db->join('category', 'category.category_id = category_product.cp_category_id', 'left');
		$this->db->order_by('product_name');
		$query = $this->db->get();

		return $query->result_array();

	}


	public function get_product($id)
	{
		$query = $this->db->get_where('products', array('product_id' => $id));
		return $query->row_array();
	}


	public function get_product_by_slug($slug)
	{
		$query = $this->db->get_where('products', array('slug' => $slug));
		return $query->row_array();
	}


	public function get_product_by_name($name)
	{
		$query = $this->db->get_where('products', array('product_name' => $name));
		$query->row_array();
		//count the number of rows returned by the query.
		$number = $query->num_rows();
		//if the number of rows is greater than 0, then the product already exists.
		if($number > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function get_product_by_name_and_id($name, $id)
	{
		$query = $this->db->get_where('products', array('product_name' => $name, 'product_id !=' => $id));
		$query->row_array();
		//count the number of rows returned by the query.
		$number = $query->num_rows();
		//if the number of rows is greater than 0, then the product already exists.
		if($number > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function create_product($image)
	{
		$data = array(
			'product_name' => $this->input->post('name'),
			'product_description' => $this->input->post('description'),
			'product_image' => $image,
			'homepage'=> $this->input->post('homepage'),
			'slug' => url_title($this->input->post('name'), 'dash', TRUE),
		);
		$this->db->insert('products', $data);

		$product_id = $this->db->insert_id();


		foreach ($this->input->post('categories[]') as $category) {
			$data = array(
				'cp_product_id' => $product_id,
				'cp_category_id' => $category,
			);
			$this->db->insert('category_product', $data);
		}
	}


	public function get_product_categories($id)
	{
		$this->db->select('cp_category_id');
		$this->db->where('cp_product_id', $id);
		$query = $this->db->get('category_product');
		return $query->result_array();
	}


	public function get_products_by_category($category,$limit = FALSE, $offset = FALSE)
	{
		if($limit){
			$this->db->limit($limit, $offset);
		}

		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('category_product', 'category_product.cp_product_id = products.product_id');
		$this->db->join('category', 'category.category_id = category_product.cp_category_id');
		$this->db->where('category.category_slug', $category);
		$this->db->order_by('products.product_name');
		$query = $this->db->get();
		return $query->result_array();
	}


	public function count_products_by_category($category)
	{

		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('category_product', 'category_product.cp_product_id = products.product_id');
		$this->db->join('category', 'category.category_id = category_product.cp_category_id');
		$this->db->where('category.category_slug', $category);
		$this->db->order_by('products.product_name');
		$query = $this->db->get();
		return $query->num_rows();
	}


	public function update_product($id, $image)
	{
		$data = array(
			'product_name' => $this->input->post('name'),
			'product_description' => $this->input->post('description'),
			'product_image' => $image,
		);

		$this->db->where('product_id', $id);
		$this->db->update('products', $data);

		$this->db->where('cp_product_id', $id);
		$this->db->delete('category_product');

		foreach ($this->input->post('categories[]') as $category) {
			$data = array(
				'cp_product_id' => $id,
				'cp_category_id' => $category,
			);
			$this->db->insert('category_product', $data);
		}
	}


	public function delete_product($id)
	{
		$this->db->where('product_id', $id);
		return $this->db->delete('products');
	}


	public function search($query) {
		// Perform a database query to get search results
		$this->db->like('product_name', $query);
		$results = $this->db->get('products')->result_array();

		return $results;
	}

}
