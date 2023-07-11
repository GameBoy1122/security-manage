<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Enroll extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Enroll_model');
		$this->load->library("Response_library");
	}

	/** ------------------------------------------------------- **
	 **           MANDATORY SCRIPT
    /** ------------------------------------------------------- **/
	public function index()
	{
		$this->load->view('header');
		$this->load->view('enroll');
		$this->load->view('footer');
	}
	public function register()
	{
		if (!empty($_FILES['file_idcard'])) {
			$files = $_FILES['file_idcard'];
			$count = count($files['name']);
			for ($i = 0; $i < $count; $i++) {
				if ($files['error'][$i] == UPLOAD_ERR_OK) {
					$filename = uniqid() . '_' . $files['name'][$i];
					$filepath = 'assets/uploads/file_idcard/' . $filename;
					if (move_uploaded_file($files['tmp_name'][$i], $filepath)) {
						$file_idcard[] = $filepath;
					}
				}
			}
		} else {
			$file_idcard = null;
		}

		if (!empty($_FILES['file_house_registration'])) {
			$files = $_FILES['file_house_registration'];
			$count = count($files['name']);
			for ($i = 0; $i < $count; $i++) {
				if ($files['error'][$i] == UPLOAD_ERR_OK) {
					$filename = uniqid() . '_' . $files['name'][$i];
					$filepath = 'assets/uploads/file_house_registration/' . $filename;
					if (move_uploaded_file($files['tmp_name'][$i], $filepath)) {
						$file_house_registration[] =  $filepath;
					}
				}
			}
		} else {
			$file_house_registration = null;
		}

		if (!empty($_FILES['file_photo'])) {
			$files = $_FILES['file_photo'];
			$count = count($files['name']);
			for ($i = 0; $i < $count; $i++) {
				if ($files['error'][$i] == UPLOAD_ERR_OK) {
					$filename = uniqid() . '_' . $files['name'][$i];
					$filepath = 'assets/uploads/file_photo/' . $filename;
					if (move_uploaded_file($files['tmp_name'][$i], $filepath)) {
						$file_photo[] =  $filepath;
					}
				}
			}
		} else {
			$file_photo = null;
		}

		if (!empty($_FILES['file_certificate'])) {
			$files = $_FILES['file_certificate'];
			$count = count($files['name']);
			for ($i = 0; $i < $count; $i++) {
				if ($files['error'][$i] == UPLOAD_ERR_OK) {
					$filename = uniqid() . '_' . $files['name'][$i];
					$filepath = 'assets/uploads/file_certificate/' . $filename;
					if (move_uploaded_file($files['tmp_name'][$i], $filepath)) {
						$file_certificate[] = $filepath;
					}
				}
			}
		} else {
			$file_certificate = null;
		}

		$postData = array(
			"enroll_id" => $this->input->post('enroll_id'),
			"status" => $this->input->post('status'),
			"name_th" => $this->input->post('name_th'),
			"name_en" => $this->input->post('name_en'),
			"nickname" => $this->input->post('nickname'),
			"id_cardname" => $this->input->post('id_cardname'),
			"shirt_select" => $this->input->post('shirt_select'),
			"birthday_day" => $this->input->post('birthday_day'),
			"birthday_month" => $this->input->post('birthday_month'),
			"birthday_year" => $this->input->post('birthday_year'),
			"ethnicity" => $this->input->post('ethnicity'),
			"nationality" => $this->input->post('nationality'),
			"religion" => $this->input->post('religion'),
			"current_position" => $this->input->post('current_position'),
			"address_no" => $this->input->post('address_no'),
			"address_alley" => $this->input->post('address_alley'),
			"address_road" => $this->input->post('address_road'),
			"address_province" => $this->input->post('address_province'),
			"address_district" => $this->input->post('address_district'),
			"address_subdistrict" => $this->input->post('address_subdistrict'),
			"address_postcode" => $this->input->post('address_postcode'),
			"work_address" => $this->input->post('work_address'),
			"work_mobile" => $this->input->post('work_mobile'),
			"work_fax" => $this->input->post('work_fax'),
			"work_house" => $this->input->post('work_house'),
			"work_email" => $this->input->post('work_email'),
			"work_name" => $this->input->post('work_name'),
			"work_no" => $this->input->post('work_no'),
			"work_alley" => $this->input->post('work_alley'),
			"work_road" => $this->input->post('work_road'),
			"work_province" => $this->input->post('work_province'),
			"work_district" => $this->input->post('work_district'),
			"work_subdistrict" => $this->input->post('work_subdistrict'),
			"work_postcode" => $this->input->post('work_postcode'),
			"marital_status" => $this->input->post('marital_status'),
			"marital_name" => $this->input->post('marital_name'),
			"marital_job" => $this->input->post('marital_job'),
			"marital_day" => $this->input->post('marital_day'),
			"marital_month" => $this->input->post('marital_month'),
			"marital_year" => $this->input->post('marital_year'),
			"marital_ethnicity" => $this->input->post('marital_ethnicity'),
			"marital_nationality" => $this->input->post('marital_nationality'),
			"marital_religion" => $this->input->post('marital_religion'),
			"secondary_education_branch" => $this->input->post('secondary_education_branch'),
			"secondary_education_academy" => $this->input->post('secondary_education_academy'),
			"secondary_education_year" => $this->input->post('secondary_education_year'),
			"bachelors_degree_branch" => $this->input->post('bachelors_degree_branch'),
			"bachelors_degree_academy" => $this->input->post('bachelors_degree_academy'),
			"bachelors_degree_year" => $this->input->post('bachelors_degree_year'),
			"masters_degree_branch" => $this->input->post('masters_degree_branch'),
			"masters_degree_academy" => $this->input->post('masters_degree_academy'),
			"masters_degree_year" => $this->input->post('masters_degree_year'),
			"doctorate_branch" => $this->input->post('doctorate_branch'),
			"doctorate_academy" => $this->input->post('doctorate_academy'),
			"doctorate_year" => $this->input->post('doctorate_year'),
			"training_course_information" => $this->input->post('training_course_information'),
			"workinfo_work_history" => $this->input->post('workinfo_work_history'),
			"workinfo_position" => $this->input->post('workinfo_position'),
			"workinfo_companyname" => $this->input->post('workinfo_companyname'),
			"workinfo_jobtype" => $this->input->post('workinfo_jobtype'),
			"workinfo_position_2" => $this->input->post('workinfo_position_2'),
			"workinfo_companyname_2" => $this->input->post('workinfo_companyname_2'),
			"workinfo_jobtype_2" => $this->input->post('workinfo_jobtype_2'),
			"workinfo_workdetails" => $this->input->post('workinfo_workdetails'),
			"workinfo_responsibility" => $this->input->post('workinfo_responsibility'),
			"achievements_job" => $this->input->post('achievements_job'),
			"abilities" => $this->input->post('abilities'),
			"desire" => $this->input->post('desire'),
			"course_regulations" => $this->input->post('course_regulations'),
			"file_idcard" => $file_idcard[0],
			"file_house_registration" => $file_house_registration[0],
			"file_photo" => $file_photo[0],
			"file_certificate" => $file_certificate[0],
		);

		// get data and post
		$enroll = $this->Enroll_model->Enroll($postData);

		// get data response
		$enroll = json_decode($enroll);

		$this->response_library->responseJSON($enroll->code, $enroll->message, $enroll->data);
	}
}
