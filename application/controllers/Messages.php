<?php
class Messages extends MY_Controller
{
	public function index()
	{
		$data['title'] = 'Ver Mis Mensajes';
		$data['messages'] = $this->Contact_Model->get_all();

		$this->load->view('templates/header');
		$this->load->view('templates/topnav');
		$this->load->view('templates/sidebar');
		$this->load->view('messages/index', $data);
		$this->load->view('templates/footer');
	}


	public function view($id)
	{
		$data['title'] = 'Ver Mensaje';
		$data['message'] = $this->Contact_Model->get_message($id);

		$this->load->view('templates/header');
		$this->load->view('templates/topnav');
		$this->load->view('templates/sidebar');
		$this->load->view('messages/view', $data);
		$this->load->view('templates/footer');
	}

}
