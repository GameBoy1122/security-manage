<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model("News_model");
		$model_filter = new stdClass();
		$model_filter->where["status"] = "ACTIVATE";
		$model_filter->order_by = 'news_id ASC';
		$news = $this->News_model->search($model_filter);

		$this->load->view('header');
		$this->load->view('news',compact('news'));
		$this->load->view('footer');
	}
	public function details($id)
	{
		$this->load->model("News_model");
		$model_filter = new stdClass();
		$model_filter->where["news_id"] = $id;
		$model_filter->order_by = 'news_id ASC';
		$news = $this->News_model->search($model_filter);
		$news = $news[0];
		// echo "<pre>";
		// print_r($news);
		// exit();

		$this->load->view('header');
		$this->load->view('new_details',compact('news'));
		$this->load->view('footer');
	}
}