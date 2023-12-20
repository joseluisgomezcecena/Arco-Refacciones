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


	public function register()
	{
		$data['title'] = 'Configure Users';


		$this->form_validation->set_rules('user_name', 'Username', 'required');
		$this->form_validation->set_rules('user_password', 'Password', 'required');



		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('users/index', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			//Encrypt password
			$encrypted_pwd = password_hash($this->input->post('password'), PASSWORD_DEFAULT);


			$user = $this->UserModel->register($encrypted_pwd);
			$this->session->set_flashdata('success', 'El usuario fue creado con exito, puedes crear mas usuarios.');
			redirect(base_url() . 'admin/users');
		}
	}


	public function update($id)
	{
		$data['title'] = 'Configure Users';
		$data['user'] = $this->UserModel->get_user($id);

		$this->form_validation->set_rules('user_name', 'Username', 'required');
		$this->form_validation->set_rules('user_password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('users/edit', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			//Encrypt password
			$encrypted_pwd = password_hash($this->input->post('user_password'), PASSWORD_DEFAULT);



			$user = $this->UserModel->update($id, $encrypted_pwd);
			$this->session->set_flashdata('success', 'The user was updated successfully.');
			redirect(base_url() . 'admin/users');
		}
	}


	public function delete($id)
	{

		$data['title'] = 'Configure Users';
		$data['user'] = $this->UserModel->get_user($id);


		if (!isset($_POST['delete'])) {
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('users/delete', $data);
			$this->load->view('templates/footer');
		}
		else {

			$this->UserModel->delete_user($id);
			$this->session->set_flashdata('success', 'El usuario fue eliminado con exito.');
			redirect(base_url() . 'admin/users');
		}
	}

}
