<?php

class UserModel extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}

	public function register($encrypted_pwd)
	{
		$data = array(
			'user_name'=>$this->input->post('user_name'),
			'user_password'=>$encrypted_pwd,
		);
		return $this->db->insert('users', $data);
	}


	public function update($id, $encrypted_pwd)
	{
		$data = array(
			'user_name'=>$this->input->post('user_name'),
			'user_password'=>$encrypted_pwd,
		);

		return $this->db->update('users', $data, array('user_id'=>$id));
	}


	public function edit_profile($post_image, $uploaded, $user_id, $encrypted_pwd)
	{
		$id = $user_id;

		if($uploaded== 0)
		{
			$data = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'username'=>$this->input->post('username'),
				'phone'=>$this->input->post('phone'),
				'password'=>$encrypted_pwd,
				'bio'=>$this->input->post('bio'),
			);
		}
		else
		{
			$data = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'username'=>$this->input->post('username'),
				'phone'=>$this->input->post('phone'),
				'password'=>$encrypted_pwd,
				'bio'=>$this->input->post('bio'),
				'profile_image'=>$post_image,
			);
		}

		return $this->db->update('users', $data, array('id'=>$id));


	}


	public function login($username, $password)
	{

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_name', $username);
		$query = $this->db->get();

		$result = $query->row_array();

		if (!empty($result) && password_verify($password, $result['user_password'])) {
			return $result;
		} else {
			return false;
		}
	}


	public function check_username_exists($username)
	{
		$query = $this->db->get_where('users', array('user_name' => $username));

		if(empty($query->row_array()))
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function check_email_exists($email)
	{
		$query = $this->db->get_where('users', array('email' => $email));

		if(empty($query->row_array()))
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function delete_user($id)
	{
		$this->db->delete('users', array('user_id' => $id));
	}


	public function get_user($id)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_id', $id);
		$this->db->where('user_name !=', 'jgomez');
		$query = $this->db->get();
		return $query->row_array();
	}


	public function get_users()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_name !=', 'jgomez');
		$query = $this->db->get();
		return $query->result_array();
	}



}
