<?php
class Users extends MY_Controller
{
	public function index()
	{
		$data['title'] = 'Configure Users';
		$data['users'] = $this->UserModel->get_users();

		$this->load->view('templates/header');
		$this->load->view('templates/topnav');
		$this->load->view('templates/sidebar');
		$this->load->view('users/index', $data);
		$this->load->view('templates/footer');
	}

	public function get_user($id)
	{
		$data['title'] = 'Configure Users';
		$data['user'] = $this->UserModel->get_user($id);

		$this->load->view('templates/header');
		$this->load->view('templates/topnav');
		$this->load->view('templates/sidebar');
		$this->load->view('users/edit', $data);
		$this->load->view('templates/footer');
	}


	public function create()
	{
		$data['title'] = 'Configure Users';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('users/create', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$user = $this->UserModel->create_user();
			$this->session->set_flashdata('success', 'The user was created successfully, you can add more users.');
			redirect(base_url() . 'admin/config/users/new');
		}
	}


	public function update($id)
	{
		$data['title'] = 'Configure Users';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('users/edit', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$user = $this->UserModel->update_user($id);
			$this->session->set_flashdata('success', 'The user was updated successfully.');
			redirect(base_url() . 'admin/config/users');
		}
	}


	public function delete($id)
	{
		$this->UserModel->delete_user($id);
		$this->session->set_flashdata('success', 'The user was deleted successfully.');
		redirect(base_url() . 'admin/config/users');
	}

}
