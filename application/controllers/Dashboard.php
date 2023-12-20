<?php
class Dashboard extends MY_Controller
{
	public function home()
	{
		$data['title'] = 'Dashboard';


		$this->load->view('templates/header');
		$this->load->view('templates/topnav');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('templates/footer');
	}
}
