<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Enroll extends CI_Controller

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

        $this->load->model("Enroll_getdata_model");



        $page = new stdClass();

        $page->get_first = true;

        $page = $this->Enroll_getdata_model->search($page);



        $this->load->view("AdministratorArea/Enroll/Index", compact("page"));

	}

	public function edit($Enroll_id = null)

	{

		/** ------------------------------------------------------- **

		 **           CONSTRUCT PHASE

		/** ------------------------------------------------------- **/

        $this->load->model("Enroll_getdata_model");
        $this->load->library("encryption_library");
        $this->load->library("response_library");
        $this->load->library("guid_library");

        $Enrolls = $this->Enroll_getdata_model->search();


		/** ------------------------------------------------------- **

		 **           POST PHASE

		/** ------------------------------------------------------- **/

        if($this->input->post())

        {

            if($Enroll_id != null)

            {

                $Enroll = $this->Enroll_getdata_model->find($Enroll_id);

                $Enroll->modified_date = date("Y-m-d h:i:s");

                $Enroll->modified_by = $this->session->userdata("__administrator::administrator_id");

                

            }

            else

            {

                $Enroll = new stdClass();

                $Enroll->created_date = date("Y-m-d h:i:s");

                $Enroll->created_by = $this->session->userdata("__administrator::administrator_id");

            }



            $Enroll->status = $this->input->post("status");

            $Enroll->title = $this->input->post("title");
            
            $Enroll->description = $this->input->post("description");
            
            $Enroll->link = $this->input->post("link");


            

            if($_FILES['image']['size']['th'] > 0)

            {
                $_FILES['upload_file']['name']= $_FILES['image']['name']['th'];

                $_FILES['upload_file']['type']= $_FILES['image']['type']['th'];

                $_FILES['upload_file']['tmp_name']= $_FILES['image']['tmp_name']['th'];

                $_FILES['upload_file']['error']= $_FILES['image']['error']['th'];

                $_FILES['upload_file']['size']= $_FILES['image']['size']['th'];

                $fileName = date("YmdHis")."_".$this->guid_library->generate();

                $config['file_name'] = $fileName;

                $config['upload_path'] = FCPATH.'/assets/uploads/Enroll/';

                $config['allowed_types'] = 'gif|jpg|png|jpeg';

                $config['max_size'] = '0';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                $uploadCheck = $this->upload->do_upload("upload_file");

                $upload_data = $this->upload->data();

                $file_name = $upload_data['file_name'];



                $Enroll->image = '/assets/uploads/Enroll/'.$file_name;

                

            }

            $Enroll_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

            if($Enroll_validated["code"] == "0x0000-00000")

            {

                $Enroll_id = $this->Enroll_getdata_model->save($Enroll);
                $this->response_library->responseJSON($Enroll_validated["code"], $Enroll_validated["message"]);

            }

            else

            {

                $this->response_library->responseJSON($Enroll_validated["code"], $Enroll_validated["message"]);

            }

        }



		/** ------------------------------------------------------- **

		 **           PROCESS PHASE

		/** ------------------------------------------------------- **/

        $Enroll = $this->Enroll_getdata_model->find($Enroll_id);



        

		/** ------------------------------------------------------- **

		 **           RENDER VIEW PHASE

		/** ------------------------------------------------------- **/

        $data = array(

            "Enroll" => $Enroll

        );

        $this->load->view("AdministratorArea/Enroll/Edit",$data);

	}



    public function delete($Enroll_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

        /** ------------------------------------------------------- **/

        $this->load->model("Enroll_getdata_model");



        $this->load->library("response_library");



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

        /** ------------------------------------------------------- **/

        $Enroll = $this->Enroll_getdata_model->find($Enroll_id);

        $Enroll->modified_date = date("Y-m-d h:i:s");

        $Enroll->modified_by = $this->session->userdata("__administrator::administrator_id");

        $Enroll->status = "REMOVED";



        $Enroll_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

        if($Enroll_validated["code"] == "0x0000-00000")

        {

            $this->Enroll_getdata_model->save($Enroll);



            $this->response_library->responseJSON($Enroll_validated["code"], $Enroll_validated["message"]);

        }

        else

        {

            $this->response_library->responseJSON($Enroll_validated["code"], $Enroll_validated["message"]);

        }

    }



    /** ------------------------------------------------------- **

     **           ADDITIONAL SCRIPT

    /** ------------------------------------------------------- **/

    public function datatables()

    {

        

            $this->load->library("datatables_library");

            $this->load->model("Enroll_getdata_model");



            $model_filter = new stdClass();

            $model_filter->custom_where = "status IN ('ACTIVE','SUSPEND')";

            $Enroll = $this->Enroll_getdata_model->search($model_filter);



            print_r(json_encode($Enroll)); 

       

    }



    public function sort()

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

        /** ------------------------------------------------------- **/

        $this->load->model("Enroll_getdata_model");



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



