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
		$this->load->view('header');
		$this->load->view('place');
		$this->load->view('footer');
	}
}
