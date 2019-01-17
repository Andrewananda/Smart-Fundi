<?php
class User_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}
	public function create_people(){
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('mail'),
			'phone' => $this->input->post('contact'),
			'budget' => $this->input->post('mybudget')

		);
		       $this->db->insert('construct',$data);
	}


}
