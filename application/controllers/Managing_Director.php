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
		$this->load->view('header');
		$this->load->view('managing_director');
		$this->load->view('footer');
	}
}