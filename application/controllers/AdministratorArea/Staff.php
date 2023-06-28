<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Staff extends CI_Controller

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

        $this->load->model("Staff_model");



        $page = new stdClass();

        $page->get_first = true;

        $page = $this->Staff_model->search($page);



        $this->load->view("AdministratorArea/Staff/Index", compact("page"));

	}

	public function edit($staff_id = null)

	{

		/** ------------------------------------------------------- **

		 **           CONSTRUCT PHASE

		/** ------------------------------------------------------- **/

        $this->load->model("staff_model");
        $this->load->library("encryption_library");
        $this->load->library("response_library");
        $this->load->library("guid_library");

        $staffs = $this->staff_model->search();


		/** ------------------------------------------------------- **

		 **           POST PHASE

		/** ------------------------------------------------------- **/

        if($this->input->post())

        {

            if($staff_id != null)

            {

                $staff = $this->staff_model->find($staff_id);

                $staff->modified_date = date("Y-m-d h:i:s");

                $staff->modified_by = $this->session->userdata("__administrator::administrator_id");

                

            }

            else

            {

                $staff = new stdClass();

                $staff->created_date = date("Y-m-d h:i:s");

                $staff->created_by = $this->session->userdata("__administrator::administrator_id");

            }



            $staff->status = $this->input->post("status");

            $staff->title = $this->input->post("title");

            $staff->description = $this->input->post("description");

            if($_FILES['image']['size']['th'] > 0)

            {
                $_FILES['upload_file']['name']= $_FILES['image']['name']['th'];

                $_FILES['upload_file']['type']= $_FILES['image']['type']['th'];

                $_FILES['upload_file']['tmp_name']= $_FILES['image']['tmp_name']['th'];

                $_FILES['upload_file']['error']= $_FILES['image']['error']['th'];

                $_FILES['upload_file']['size']= $_FILES['image']['size']['th'];

                $fileName = date("YmdHis")."_".$this->guid_library->generate();

                $config['file_name'] = $fileName;

                $config['upload_path'] = FCPATH.'/assets/uploads/staff/';

                $config['allowed_types'] = 'gif|jpg|png|jpeg';

                $config['max_size'] = '0';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                $uploadCheck = $this->upload->do_upload("upload_file");

                $upload_data = $this->upload->data();

                $file_name = $upload_data['file_name'];



                $staff->image = $file_name;

                

            }

            $staff_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

            if($staff_validated["code"] == "0x0000-00000")

            {

                $staff_id = $this->staff_model->save($staff);
                $this->response_library->responseJSON($staff_validated["code"], $staff_validated["message"]);

            }

            else

            {

                $this->response_library->responseJSON($staff_validated["code"], $staff_validated["message"]);

            }

        }



		/** ------------------------------------------------------- **

		 **           PROCESS PHASE

		/** ------------------------------------------------------- **/

        $staff = $this->staff_model->find($staff_id);



        

		/** ------------------------------------------------------- **

		 **           RENDER VIEW PHASE

		/** ------------------------------------------------------- **/

        $data = array(

            "staff" => $staff

        );

        $this->load->view("AdministratorArea/Staff/Edit",$data);

	}



    public function delete($staff_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

        /** ------------------------------------------------------- **/

        $this->load->model("staff_model");



        $this->load->library("response_library");



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

        /** ------------------------------------------------------- **/

        $staff = $this->staff_model->find($staff_id);

        $staff->modified_date = date("Y-m-d h:i:s");

        $staff->modified_by = $this->session->userdata("__administrator::administrator_id");

        $staff->status = "REMOVED";



        $staff_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

        if($staff_validated["code"] == "0x0000-00000")

        {

            $this->staff_model->save($staff);



            $this->response_library->responseJSON($staff_validated["code"], $staff_validated["message"]);

        }

        else

        {

            $this->response_library->responseJSON($staff_validated["code"], $staff_validated["message"]);

        }

    }



    /** ------------------------------------------------------- **

     **           ADDITIONAL SCRIPT

    /** ------------------------------------------------------- **/

    public function datatables()

    {

        

            $this->load->library("datatables_library");

            $this->load->model("staff_model");



            $model_filter = new stdClass();

            $model_filter->custom_where = "status IN ('ACTIVATE','SUSPEND')";

            $staff = $this->staff_model->search($model_filter);



            print_r(json_encode($staff)); 

       

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



