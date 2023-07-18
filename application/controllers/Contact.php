<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	/** ------------------------------------------------------- **
	 **           MANDATORY SCRIPT
    /** ------------------------------------------------------- **/
	public function index()
	{	
		$this->load->model("Contact_us_model");
		$model_filter = new stdClass();
		$model_filter->where["status"] = "ACTIVATE";
		$model_filter->order_by = 'contact_us_id ASC';
		$contacts = $this->Contact_us_model->search($model_filter);
		$this->load->view('header');
		$this->load->view('contact', compact('contacts'));
		$this->load->view('footer');
	}
}
