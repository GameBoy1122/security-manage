<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
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
		$this->load->model("Download_model");
		$model_filter = new stdClass();
		$model_filter->where["status"] = "ACTIVATE";
		$model_filter->order_by = 'sort ASC';
		$downloads = $this->Download_model->search($model_filter);
		$this->load->view('header');
		$this->load->view('download', compact('downloads'));
		$this->load->view('footer');
	}
}
