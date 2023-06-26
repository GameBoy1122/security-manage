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
		$this->load->view('header');
		$this->load->view('news');
		$this->load->view('footer');
	}
}