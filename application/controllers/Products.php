<?php
class Products extends MY_Controller
{

	public function index()
	{
		$data['title'] = 'Configure Products';
		$data['products'] = $this->ProductModel->get_products();
		$data['categories'] = $this->CategoryModel->get_categories();

		$this->load->view('templates/header');
		$this->load->view('templates/topnav');
		$this->load->view('templates/sidebar');
		$this->load->view('products/index', $data);
		$this->load->view('templates/footer');
	}


	public function get_product($id)
	{
		$data['title'] = 'Configure Products';
		$data['product'] = $this->ProductModel->get_product($id);
		$data['categories'] = $this->CategoryModel->get_categories();

		$this->load->view('templates/header');
		$this->load->view('templates/topnav');
		$this->load->view('templates/sidebar');
		$this->load->view('products/edit', $data);
		$this->load->view('templates/footer');
	}


	public function store()
	{
		$data['title'] = 'Configure Products';
		$data['categories'] = $this->CategoryModel->get_categories();

		$this->form_validation->set_rules('name', 'Name', 'required');

		//check if the product already exists.
		$product = $this->ProductModel->get_product_by_name($this->input->post('name'));

		if($product)
		{
			$this->session->set_flashdata('error', 'El producto ya existe.');
			redirect(base_url() . 'admin/products');
		}

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('products/create', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			//Upload Image
			$config['upload_path'] = "./assets/uploads/";
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '20048';
			$config['max_width'] = '20000';
			$config['max_height'] = '20000';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload()) {
				$errors = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('upload_error', $errors['error']);
				$product_image = 'noimage.jpg';
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$product_image = $_FILES['userfile']['name'];
			}



			$product = $this->ProductModel->create_product($product_image);
			$this->session->set_flashdata('success', 'El producto fue creado con exito, puedes agregar mas productos.');
			redirect(base_url() . 'admin/products');
		}
	}


	public function edit($id)
	{
		$data['title'] = 'Configure Products';
		$data['categories'] = $this->CategoryModel->get_categories();
		$data['product'] = $this->ProductModel->get_product($id);
		$data['product_categories'] = $this->ProductModel->get_product_categories($id);
		$this->form_validation->set_rules('name', 'Name', 'required');

		//check if the product already exists.
		$product = $this->ProductModel->get_product_by_name_and_id($this->input->post('name'), $id);

		if ($product)
		{
			$this->session->set_flashdata('error', 'El producto ya existe.');
			redirect(base_url() . 'admin/products');
		}


		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('products/edit', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			//Upload Image
			$config['upload_path'] = "./assets/uploads/";
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '20048';
			$config['max_width'] = '20000';
			$config['max_height'] = '20000';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			//check if the user uploaded a new image.
			if (empty($_FILES['userfile']['name'])){
				$product_image = $data['product']['product_image'];
			}
			else
			{
				if (!$this->upload->do_upload()) {
					$errors = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('upload_error', $errors['error']);
					$product_image = $data['product']['product_image'];
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$product_image = $_FILES['userfile']['name'];
				}
			}



			$product = $this->ProductModel->update_product($id, $product_image);
			$this->session->set_flashdata('success', 'El producto fue editado/actualizado con exito, puedes agregar mas productos.');
			redirect(base_url() . 'admin/products/edit/' . $id);
		}
	}


	public function delete($id)
	{
		$data['title'] = 'Configure Products';
		$data['categories'] = $this->CategoryModel->get_categories();
		$data['product'] = $this->ProductModel->get_product($id);
		$data['product_categories'] = $this->ProductModel->get_product_categories($id);



		if (!isset($_POST['delete_product'])) {
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('products/delete', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$product = $this->ProductModel->delete_product($id);
			$this->session->set_flashdata('success', 'El producto fue eliminado con exito.');
			redirect(base_url() . 'admin/products' );
		}
	}


}
