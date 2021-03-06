<?php
class Fundi_model extends CI_Model{
	 public function __construct()
	 {
	 	$this->load->database();
	 }
	public function fundi_create(){
		$data = array(
			'name' => $this->input->post('fundi_name'),
			'email'=> $this->input->post('mail'),
			'contact'=> $this->input->post('phone'),
			'id_number' =>$this->input->post('id'),
			'fundi_more' => $this->input->post('textarea')
		);
		return $this->db->insert('fundi',$data);
	}
	public function get_people(){
	 	$query = $this->db->query("fundi");
	 	return $query->result_array();
	}
	public function update($id){
	 	$query = $this->db->query("select * from fundi where id = '$id'");
	 	return $query->row();
	 	return $this->db->update("fundi",$id);
	}
}
