<?php

class Pages extends CI_Controller
{
	public function view($page = 'home')
	{
		if(!file_exists(APPPATH . 'views/pages/' . $page . '.php'))
		{
			show_404();
		}

		$data['title'] = ucfirst($page);
		$data['categories'] = $this->CategoryModel->get_categories();


		//load header, page & footer
		$this->load->view('templates/frontend/header');
		$this->load->view('templates/frontend/navigation',$data);
		$this->load->view('pages/' . $page, $data); //loading page and data
		$this->load->view('templates/frontend/footer');
	}



	public function view_category($category, $page = 0)
	{
		//pagination config
		$config['base_url'] = base_url() . 'productos/categoria/' . $category ;
		$config['total_rows'] = $this->ProductModel->count_products_by_category($category);
		$config['per_page'] = 2;
		//$config['uri_segment'] = 4;

		//config pagination
		$config['full_tag_open'] = "<ul class='pagination justify-content-center'>";
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = "<li class='page-item'><span class='page-link'>";
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';



		$config['prev_link'] = 'Anterior';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';


		$config['next_link'] = 'Siguiente';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';


		//Initialize pagination
		$this->pagination->initialize($config);

		// Get the current page number
		$page = $this->uri->segment(4);
		$page = ($page !== null && ctype_digit((string)$page)) ? $page : 0;

		$data['controller'] = $this;
		$category = urlencode($category);
		$data['categories'] = $this->CategoryModel->get_categories();
		$data['parents'] = $this->CategoryModel->get_parent_categories();

		$data['products'] = $this->ProductModel->get_products_by_category($category, $config['per_page'], $page);

		$config['cur_page'] = $page; // Add this line to set the current page
		//$data['pagination_links'] = $this->pagination->create_links();

		//load header, page & footer
		$this->load->view('templates/frontend/header');
		$this->load->view('templates/frontend/navigation',$data);
		$this->load->view('pages/category', $data); //loading page and data
		$this->load->view('templates/frontend/footer');
	}





	public function subcategories($category_id)
	{

		$data = $this->CategoryModel->get_subcategories($category_id);
		return $data;
	}



	public function view_product($product)
	{
		$product = urlencode($product);
		$data['title'] = ucfirst($product);
		$data['categories'] = $this->CategoryModel->get_categories();
		$data['product'] = $this->ProductModel->get_products_by_category($category);
	}



}
