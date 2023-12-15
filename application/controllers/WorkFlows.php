<?php
class WorkFlows extends MY_Controller
{
	public function create()
	{
		$data['title'] = 'Create Work Flow';
		$data['work_flows'] = $this->WorkFlowModel->get_workflows();

		$this->form_validation->set_rules('name', 'Name', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('workflows/create', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->WorkFlowModel->create_workflow();
			$this->session->set_flashdata('success', 'WorkFlow added');
			redirect(base_url() . '/admin/config/workflows/new');
		}
	}


	public function steps($id)
	{
		$data['title'] = 'Add Steps';
		$data['items'] = $this->OperationModel->get_operations();
		//$data['type'] = $type;

		//form validation rules
		$this->form_validation->set_rules('operation', 'Operation', 'required');
		$this->form_validation->set_rules('step', 'Item Name', 'required');


		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('configuration/steps', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->ItemModel->add_item();
			$this->session->set_flashdata('item_added', 'Item has been added');
			redirect('configuration/steps/'.$type);
		}

	}

}
