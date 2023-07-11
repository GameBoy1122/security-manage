<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
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
		$this->load->model("News_model");
		$model_filter = new stdClass();
		$model_filter->where["status"] = "ACTIVATE";
		$model_filter->order_by = 'news_id ASC';
		$news = $this->News_model->search($model_filter);
		$this->load->view('header');
		$this->load->view('index', compact('news'));
		$this->load->view('footer');
	}
}
