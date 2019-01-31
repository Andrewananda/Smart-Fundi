<?php
class User_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function create_people(){
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('mail'),
			'phone' => $this->input->post('contact'),
			'budget' => $this->input->post('mybudget')

		);
		     return  $this->db->insert('construct',$data);
	}
	public function get_people($id){
		$query = $this->db->query("select * from construct where id='$id'");
		return $query->row();

	}


}
