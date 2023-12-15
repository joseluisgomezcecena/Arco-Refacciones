<?php
class Categories extends MY_Controller
{

	public function index()
	{
		$data['title'] = 'Configure Categories';
		$data['categories'] = $this->CategoryModel->get_all();
		$data['parent_categories'] = $this->CategoryModel->get_parent_categories();


		$this->load->view('templates/header');
		$this->load->view('templates/topnav');
		$this->load->view('templates/sidebar');
		$this->load->view('categories/index', $data);
		$this->load->view('templates/footer');
	}


	public function get_category($id)
	{
		$data['title'] = 'Configure Categories';
		$data['category'] = $this->CategoryModel->get_category($id);

		$this->load->view('templates/header');
		$this->load->view('templates/topnav');
		$this->load->view('templates/sidebar');
		$this->load->view('categories/edit', $data);
		$this->load->view('templates/footer');
	}


	public function store()
	{
		$data['title'] = 'Configure Categories';

		$this->form_validation->set_rules('name', 'Nombre', 'required');
		$this->form_validation->set_rules('parent', 'Categoria Principal', 'required');

		//get if category already exists
		$category = $this->CategoryModel->get_category_by_name($this->input->post('name'), $this->input->post('parent'));

		if($category)
		{
			$this->session->set_flashdata('error', 'La categoria ya existe.');
			redirect(base_url() . 'admin/categories');
		}

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('categories/create', $data);
			$this->load->view('templates/footer');
		}
		else
		{
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
				$category_image = 'noimage.jpg';
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$category_image = $_FILES['userfile']['name'];
			}




			$category = $this->CategoryModel->create_category($category_image);
			$this->session->set_flashdata('success', 'La categoria fue creada con exito, puedes agregar mas categorias.');
			redirect(base_url() . 'admin/categories');
		}
	}


	public function update($id)
	{
		$data['title'] = 'Configure Categories';
		$data['parent_categories'] = $this->CategoryModel->get_parent_categories();
		$data['category'] = $this->CategoryModel->get_category_by_id($id);
		$this->form_validation->set_rules('name', 'Name', 'required');

		//get if category already exists
		$category = $this->CategoryModel->get_category_by_name_and_id($this->input->post('name'), $id, $this->input->post('parent'));

		if ($category)
		{
			$this->session->set_flashdata('error', 'La categoria ya existe.');
			redirect(base_url() . 'admin/categories/edit/' . $id);
		}

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('categories/edit', $data);
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
				$category_image = $data['category']['category_image'];

			}
			else
			{

				if (!$this->upload->do_upload()) {
					$errors = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('upload_error', $errors['error']);
					$category_image = $data['category']['category_image'];

				}
				else
				{
					$upload_data = array('upload_data' => $this->upload->data());
					$category_image = $_FILES['userfile']['name'];

				}
			}


			$this->CategoryModel->update_category($id, $category_image);
			$this->session->set_flashdata('success', 'La categoria fue actualizada con exito.');
			redirect(base_url() . 'admin/categories/edit/' . $id);
		}
	}


	public function delete($id)
	{
		$data['title'] = 'Configure Categories';
		$data['category'] = $this->CategoryModel->get_category($id);

		if(!isset($_POST['delete']))
		{
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('categories/delete', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->CategoryModel->delete_category($id);
			$this->session->set_flashdata('success', 'La categoria fue eliminada con exito.');
			redirect(base_url() . 'admin/categories');
		}
	}

}
