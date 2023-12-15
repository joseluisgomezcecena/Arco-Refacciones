<?php
class Flows extends MY_Controller
{


	public function index()
	{
		$data['title'] = 'Flows';
		$data['flows'] = $this->FlowModel->get_flows();

		$this->form_validation->set_rules('flow', 'Flow', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('flows/index', $data);
			$this->load->view('templates/footer');
		}
		else{

			$flow = $this->input->post('flow');
			redirect(base_url() . 'admin/wo/new/'.$flow);
		}
	}



	public function create($flow)
	{

		$data['title'] = 'New Work Order';
		$data['flows'] = $this->FlowModel->get_flow($flow);
		$data['items'] = $this->ItemModel->get_items($flow);
		$data['work_orders'] = $this->FlowModel->get_work_orders($flow);

		$this->form_validation->set_rules('number', 'Work Order Number or Id', 'required');
		$this->form_validation->set_rules('part_no', 'Part Number', 'required');
		$this->form_validation->set_rules('required_date', 'Required Date', 'required');
		$this->form_validation->set_rules('qty', 'Quantity', 'required');
		$this->form_validation->set_rules('work_order_step', 'Starting Point', 'required');



		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('flows/create', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->FlowModel->create($flow);
			$this->session->set_flashdata('success', 'Work Order Created Successfully');
			redirect(base_url() . 'admin/wo/new/'.$flow);
		}
	}


	public function manage($flow)
	{
		$data['title'] = 'Manage Work Orders';

		$data['flows'] = $this->FlowModel->get_flow($flow);
		$data['items'] = $this->ItemModel->get_items($flow);
		$data['work_orders'] = $this->FlowModel->get_work_orders($flow);
		$data['flow'] = $flow;

		$this->form_validation->set_rules('work_order_step', 'Starting Point', 'required');



		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('flows/manage', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->FlowModel->update($flow);
			$this->session->set_flashdata('success', 'Work Order Status Updated Successfully');
			//redirect(base_url() . 'admin/wo/new/'.$flow);
		}
	}


	public function update_status($flow)
	{
		$work_order_id = $this->input->post('wo_id');
		$work_order_step = $this->input->post('work_order_step');

		$this->FlowModel->update_step($work_order_id, $work_order_step);

		//set message
		$this->session->set_flashdata('success', 'Work Order Status Updated Successfully');

		redirect(base_url() . 'admin/wo/manage/'.$flow);
	}





}
