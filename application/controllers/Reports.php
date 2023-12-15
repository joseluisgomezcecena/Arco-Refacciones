<?php
class Reports extends MY_Controller
{
	public function index()
	{
		$data['title'] = 'Reports';

		$data['reports'] = $this->ReportModel->get_reports($start_date = NULL, $end_date = NULL, $work_order_step = NULL);

		if (!isset($_POST['report'])) {
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('reports/index', $data);
			$this->load->view('templates/footer');
		}
		else{

			$report = $this->input->post('report');
			redirect(base_url() . 'admin/reports/'.$report);
		}
	}
}
