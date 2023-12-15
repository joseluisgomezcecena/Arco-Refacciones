<?php 

class Configuration extends MY_Controller
{

	public function types()
	{
		$data['title'] = 'Configuration';
		$data['types'] = $this->TypeModel->get_types();

		$this->form_validation->set_rules('name', 'Name', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('configuration/types', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->TypeModel->add_type();
			$this->session->set_flashdata('success', 'Item has been added');
			redirect('configuration/types');
		}

	}



	/*
	public function steps($type)
	{
		$data['title'] = 'Configuration';
		$data['items'] = $this->ItemModel->get_items($type);
		$data['type'] = $type;

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
	*/


	public function update_order() {
		$new_order = $this->input->post('new_order');
		var_dump($new_order);
		$this->ItemModel->update_order($new_order);
	}

}
