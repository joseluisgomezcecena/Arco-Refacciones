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


	public function view_category($category)
	{
		$category = urlencode($category);
		$data['title'] = ucfirst($category);
		$data['categories'] = $this->CategoryModel->get_categories();
		//$data['products'] = $this->ProductModel->get_products_by_category($category);


		//load header, page & footer
		$this->load->view('templates/frontend/header');
		$this->load->view('templates/frontend/navigation',$data);
		$this->load->view('pages/category', $data); //loading page and data
		$this->load->view('templates/frontend/footer');
	}



	public function view_product($product)
	{
		$product = urlencode($product);
		$data['title'] = ucfirst($product);
		$data['categories'] = $this->CategoryModel->get_categories();
		$data['product'] = $this->ProductModel->get_products_by_category($category);
	}



}
