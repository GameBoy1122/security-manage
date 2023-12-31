<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class CS_Course_timetable extends CI_Controller

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

        $this->load->model("CS_Course_timetable_model");



        $page = new stdClass();

        $page->get_first = true;

        $page = $this->CS_Course_timetable_model->search($page);



        $this->load->view("AdministratorArea/CS_Course_timetable/Index", compact("page"));

	}

	public function edit($cs_course_timetable_id = null)

	{

		/** ------------------------------------------------------- **

		 **           CONSTRUCT PHASE

		/** ------------------------------------------------------- **/

        $this->load->model("cs_course_timetable_model");
        $this->load->library("encryption_library");
        $this->load->library("response_library");
        $this->load->library("guid_library");

        $cs_course_timetables = $this->cs_course_timetable_model->search();


		/** ------------------------------------------------------- **

		 **           POST PHASE

		/** ------------------------------------------------------- **/

        if($this->input->post())

        {

            if($cs_course_timetable_id != null)

            {

                $cs = $this->cs_course_timetable_model->find($cs_course_timetable_id);

                $cs->modified_date = date("Y-m-d h:i:s");

                $cs->modified_by = $this->session->userdata("__administrator::administrator_id");

                

            }

            else

            {

                $cs = new stdClass();

                $cs->created_date = date("Y-m-d h:i:s");

                $cs->created_by = $this->session->userdata("__administrator::administrator_id");

            }



            $cs->status = $this->input->post("status");

            $cs->title = $this->input->post("title");

            $cs->description = $this->input->post("description");

            if($_FILES['image']['size']['th'] > 0)

            {
                $_FILES['upload_file']['name']= $_FILES['image']['name']['th'];

                $_FILES['upload_file']['type']= $_FILES['image']['type']['th'];

                $_FILES['upload_file']['tmp_name']= $_FILES['image']['tmp_name']['th'];

                $_FILES['upload_file']['error']= $_FILES['image']['error']['th'];

                $_FILES['upload_file']['size']= $_FILES['image']['size']['th'];

                $fileName = date("YmdHis")."_".$this->guid_library->generate();

                $config['file_name'] = $fileName;

                $config['upload_path'] = FCPATH.'/assets/uploads/cs_course_timetable';

                $config['allowed_types'] = 'gif|jpg|png|jpeg';

                $config['max_size'] = '0';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                $uploadCheck = $this->upload->do_upload("upload_file");

                $upload_data = $this->upload->data();

                $file_name = $upload_data['file_name'];



                $cs->image = $file_name;

                

            }

            $cs_course_timetable_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

            if($cs_course_timetable_validated["code"] == "0x0000-00000")

            {

                $cs_course_timetable_id = $this->cs_course_timetable_model->save($cs);
                $this->response_library->responseJSON($cs_course_timetable_validated["code"], $cs_course_timetable_validated["message"]);

            }

            else

            {

                $this->response_library->responseJSON($cs_course_timetable_validated["code"], $cs_course_timetable_validated["message"]);

            }

        }



		/** ------------------------------------------------------- **

		 **           PROCESS PHASE

		/** ------------------------------------------------------- **/

        $cs = $this->cs_course_timetable_model->find($cs_course_timetable_id);



        

		/** ------------------------------------------------------- **

		 **           RENDER VIEW PHASE

		/** ------------------------------------------------------- **/

        $data = array(

            "cs" => $cs

        );

        $this->load->view("AdministratorArea/CS_Course_timetable/Edit",$data);

	}



    public function delete($cs_course_timetable_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

        /** ------------------------------------------------------- **/

        $this->load->model("cs_course_timetable_model");



        $this->load->library("response_library");



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

        /** ------------------------------------------------------- **/

        $cs = $this->cs_course_timetable_model->find($cs_course_timetable_id);

        $cs->modified_date = date("Y-m-d h:i:s");

        $cs->modified_by = $this->session->userdata("__administrator::administrator_id");

        $cs->status = "REMOVED";



        $cs_course_timetable_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

        if($cs_course_timetable_validated["code"] == "0x0000-00000")

        {

            $this->cs_course_timetable_model->save($cs);



            $this->response_library->responseJSON($cs_course_timetable_validated["code"], $cs_course_timetable_validated["message"]);

        }

        else

        {

            $this->response_library->responseJSON($cs_course_timetable_validated["code"], $cs_course_timetable_validated["message"]);

        }

    }



    /** ------------------------------------------------------- **

     **           ADDITIONAL SCRIPT

    /** ------------------------------------------------------- **/

    public function datatables()

    {

        

            $this->load->library("datatables_library");

            $this->load->model("cs_course_timetable_model");



            $model_filter = new stdClass();

            $model_filter->custom_where = "status IN ('ACTIVATE','SUSPEND')";

            $cs = $this->cs_course_timetable_model->search($model_filter);



            print_r(json_encode($cs)); 

       

    }



    public function sort()

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

        /** ------------------------------------------------------- **/

        $this->load->model("banner_model");



        $this->load->library("response_library");

        $this->load->library("guid_library");



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

        /** ------------------------------------------------------- **/

        $slide_orders = $this->input->post("sort_row");

        

        foreach($slide_orders as $order => $banner_id)

        {

            $sortable = $this->banner_model->find($banner_id);

            $sortable->sort = $order + 1;

            $sortable->status = "ACTIVATE";

            $sortable->modified_date = date("Y-m-d H:i:s");

            $sortable->modified_by = $this->session->userdata("__administrator::administrator_id");



            $this->banner_model->save($sortable);

        }



        $this->response_library->responseJSON("0x0000-00000", "Process request Complete.");

    }

}



