<?php
class Contact extends CI_Controller
{
	public function submit_contact()
	{
		$data = array(
			'from_name' => $this->input->post('name'),
			'from_email' => $this->input->post('email'),
			'from_phone' => $this->input->post('phone'),
			'to_store' => $this->input->post('store'),
			'message_text' => $this->input->post('message')
		);

		$result = $this->Contact_Model->save_contact($data);

		if($result['status'] == 'success') {
			// Send an email to the store
			$this->load->library('email');
			$this->email->from($this->input->post('email'), $this->input->post('name'));
			$this->email->to($this->input->post('store'));
			$this->email->subject('Contact Form Submission');
			$this->email->message($this->input->post('message'));
			$this->email->send();
		}

		// Send a response to the Ajax request
		echo json_encode($result);
	}
}
