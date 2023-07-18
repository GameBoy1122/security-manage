<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Place extends CI_Controller
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
		$this->load->model("Training_place_model");
		$model_filter = new stdClass();
		$model_filter->where["status"] = "ACTIVATE";
		$model_filter->order_by = 'Training_place_id ASC';
		$Training_place = $this->Training_place_model->search($model_filter);
		$this->load->view('header');
		$this->load->view('place', compact('Training_place'));
		$this->load->view('footer');
	}
}
