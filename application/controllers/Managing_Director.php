<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Managing_Director extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model("Qualified_committee_model");
		$model_filter = new stdClass();
		$model_filter->where["status"] = "ACTIVATE";
		$model_filter->order_by = 'qualified_committee_id ASC';
		$qualified_committee = $this->Qualified_committee_model->search($model_filter);

		$this->load->model("Course_steering_committee_model");
		$model_filter = new stdClass();
		$model_filter->where["status"] = "ACTIVATE";
		$model_filter->order_by = 'course_steering_committee_id ASC';
		$course_steering_committee = $this->Course_steering_committee_model->search($model_filter);

		$this->load->model("Course_staff_model");
		$model_filter = new stdClass();
		$model_filter->where["status"] = "ACTIVATE";
		$model_filter->order_by = 'course_staff_id ASC';
		$course_staff = $this->Course_staff_model->search($model_filter);

		$this->load->view('header');
		$this->load->view('managing_director', compact('qualified_committee', 'course_steering_committee', 'course_staff'));
		$this->load->view('footer');
	}
}