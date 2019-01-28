<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('fundi_model');
		$this->load->helper('url');
		$this->load->library('session');
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
			$this->load->view('create');


		}
	}
	public function form_fundi(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('fundi_name','Name','required');
		$this->form_validation->set_rules('mail','Email','required');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('id','Id','required');
		$this->form_validation->set_rules('textarea','Textarea','required');

		if ($this->form_validation->run() === FALSE){
			$this->load->view('fundi');
		}
		else{
			$this->fundi_model->fundi_create();
			echo 'Added Sucessfully';
			$this->load->view('success');

		}

	}


}
