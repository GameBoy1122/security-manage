<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admission_index extends CI_Controller

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

        $this->load->model("Admission_index_model");



        $page = new stdClass();

        $page->get_first = true;

        $page = $this->Admission_index_model->search($page);



        $this->load->view("AdministratorArea/Admission_index/Index", compact("page"));

	}






	public function edit($admission_index_id = null)

	{

		/** ------------------------------------------------------- **

		 **           CONSTRUCT PHASE

		/** ------------------------------------------------------- **/

        $this->load->model("admission_index_model");
        $this->load->library("encryption_library");
        $this->load->library("response_library");
        $this->load->library("guid_library");

        $admission_indexs = $this->admission_index_model->search();


		/** ------------------------------------------------------- **

		 **           POST PHASE

		/** ------------------------------------------------------- **/

        if($this->input->post())

        {

            if($admission_index_id != null)

            {

                $admission = $this->admission_index_model->find($admission_index_id);

                $admission->modified_date = date("Y-m-d h:i:s");

                $admission->modified_by = $this->session->userdata("__administrator::administrator_id");

                

            }

            else

            {

                $admission = new stdClass();

                $admission->created_date = date("Y-m-d h:i:s");

                $admission->created_by = $this->session->userdata("__administrator::administrator_id");

            }



            $admission->status = $this->input->post("status");

            $admission->title = $this->input->post("title");

            $admission->description = $this->input->post("description");

            if($_FILES['image']['size']['th'] > 0)

            {
                $_FILES['upload_file']['name']= $_FILES['image']['name']['th'];

                $_FILES['upload_file']['type']= $_FILES['image']['type']['th'];

                $_FILES['upload_file']['tmp_name']= $_FILES['image']['tmp_name']['th'];

                $_FILES['upload_file']['error']= $_FILES['image']['error']['th'];

                $_FILES['upload_file']['size']= $_FILES['image']['size']['th'];

                $fileName = date("YmdHis")."_".$this->guid_library->generate();

                $config['file_name'] = $fileName;

                $config['upload_path'] = FCPATH.'/assets/uploads/admission_index/';

                $config['allowed_types'] = 'gif|jpg|png|jpeg';

                $config['max_size'] = '0';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                $uploadCheck = $this->upload->do_upload("upload_file");

                $upload_data = $this->upload->data();

                $file_name = $upload_data['file_name'];



                $admission->image = $file_name;

                

            }

            $admission_index_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

            if($admission_index_validated["code"] == "0x0000-00000")

            {

                $admission_index_id = $this->admission_index_model->save($admission);
                $this->response_library->responseJSON($admission_index_validated["code"], $admission_index_validated["message"]);

            }

            else

            {

                $this->response_library->responseJSON($admission_index_validated["code"], $admission_index_validated["message"]);

            }

        }



		/** ------------------------------------------------------- **

		 **           PROCESS PHASE

		/** ------------------------------------------------------- **/

        $admission = $this->admission_index_model->find($admission_index_id);



        

		/** ------------------------------------------------------- **

		 **           RENDER VIEW PHASE

		/** ------------------------------------------------------- **/

        $data = array(

            "admission" => $admission

        );

        $this->load->view("AdministratorArea/Admission_index/Edit",$data);

	}



    public function delete($admission_index_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

        /** ------------------------------------------------------- **/

        $this->load->model("admission_index_model");



        $this->load->library("response_library");



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

        /** ------------------------------------------------------- **/

        $admission = $this->admission_index_model->find($admission_index_id);

        $admission->modified_date = date("Y-m-d h:i:s");

        $admission->modified_by = $this->session->userdata("__administrator::administrator_id");

        $admission->status = "REMOVED";



        $admission_index_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

        if($admission_index_validated["code"] == "0x0000-00000")

        {

            $this->admission_index_model->save($admission);



            $this->response_library->responseJSON($admission_index_validated["code"], $admission_index_validated["message"]);

        }

        else

        {

            $this->response_library->responseJSON($admission_index_validated["code"], $admission_index_validated["message"]);

        }

    }



    /** ------------------------------------------------------- **

     **           ADDITIONAL SCRIPT

    /** ------------------------------------------------------- **/

    public function datatables()

    {

        

            $this->load->library("datatables_library");

            $this->load->model("admission_index_model");



            $model_filter = new stdClass();

            $model_filter->custom_where = "status IN ('ACTIVATE','SUSPEND')";

            $admission = $this->admission_index_model->search($model_filter);



            print_r(json_encode($admission)); 

       

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



