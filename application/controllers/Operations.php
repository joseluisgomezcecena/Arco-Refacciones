<?php
class Operations extends MY_Controller
{

	public function create()
	{
		$data['title'] = 'Configure Operations';

		$this->form_validation->set_rules('name', 'Name', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('operations/create', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$operation = $this->OperationModel->create_operation();
			$this->session->set_flashdata('success', 'The operation was created successfully, you can add more operations.');

			if(isset($_POST['save']))
			{
				redirect(base_url() . 'admin/config/operations/new');
			}
			else
			{
				redirect(base_url() . 'admin/config/operations/custom_fields/' . $operation);
			}


		}

	}//create end.


	public function custom_fields($id)
	{
		$data['title'] = 'Configure Custom Fields';
		$data['operation'] = $this->OperationModel->get_operation($id);
		$data['custom_fields'] = $this->OperationModel->get_custom_fields($id);

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('operations/custom_fields', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->OperationModel->add_custom_field($id);
			$this->session->set_flashdata('success', 'The custom field was created successfully, you can add more custom fields.');
			redirect(base_url() . 'admin/config/operations/custom_fields/' . $id);
		}

	}//custom_fields end.







}
