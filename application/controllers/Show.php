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
		$this->load->driver('cache');
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
			$user_name = $_POST['name'];
			$this->session->set_userdata('loggedin_user', $user_name);
			$this->user_model->create_people();
			?><success class="success"> Added successfully</success> <?;
			if (isset($_SESSION['loggedin_user'])){
				//echo $user_name;
			}
			else{
				echo 'Sorry you are not logged in';
			}
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
			?><success class="success"> Added successfully</success> <?;
			$user = $_POST['name'];
			if ($this->user_exist($user)){
				echo 'user already exist';
			}else {
				$this->load->view('fundi');
			}

		}

	}
	public function user_data($id){
		return $this->user_model->get_people($id);
		$username = $_POST['name'];
		$this->session->userdata($username,$id);
		if (isset($_SESSION[$username])){
			echo $username . $id;
		}else{
			echo 'Does Not Exist';
		}

	}


}
