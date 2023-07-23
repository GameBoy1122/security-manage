<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lecturer extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model("Lecturer_model");
		$model_filter = new stdClass();
		$model_filter->where["status"] = "ACTIVATE";
		$model_filter->order_by = 'lecturer_id ASC';
		$lecturer = $this->Lecturer_model->search($model_filter);

		$this->load->view('header');
		$this->load->view('lecturer',compact('lecturer'));
		$this->load->view('footer');
	}
}