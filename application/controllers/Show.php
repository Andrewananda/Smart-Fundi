<?php
class Show extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('url');
	}

	public function view(){
		$this->load->view('show');

	}
	public function form_create(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('mail','Email','required');
		$this->form_validation->set_rules('contact','Phone','required');
		$this->form_validation->set_rules('mybudget','Budget','required');


		if ($this->form_validation->run() === FALSE){
			$this->load->view('create');
		}
		else{
			$this->user_model->create_people();
			$this->load->view('success');
		}
	}


}
