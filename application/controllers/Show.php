<?php
class Show extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function view(){
		$this->load->view('show');


	}
	public function create(){
		$this->load->view('fundi-module/quote');

	}

}
