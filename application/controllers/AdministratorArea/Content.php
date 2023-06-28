<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Content extends CI_Controller

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

        $this->load->model("Content_model");



        $page = new stdClass();

        $page->get_first = true;

        $page = $this->Content_model->search($page);



        $this->load->view("AdministratorArea/Content/Index", compact("page"));

	}

	public function edit($content_id = null)

	{

		/** ------------------------------------------------------- **

		 **           CONSTRUCT PHASE

		/** ------------------------------------------------------- **/

        $this->load->model("Content_model");
        $this->load->library("encryption_library");
        $this->load->library("response_library");
        $this->load->library("guid_library");

        $contents = $this->Content_model->search();


		/** ------------------------------------------------------- **

		 **           POST PHASE

		/** ------------------------------------------------------- **/

        if($this->input->post())

        {

            if($content_id != null)

            {

                $content = $this->Content_model->find($content_id);

                $content->modified_date = date("Y-m-d h:i:s");

                $content->modified_by = $this->session->userdata("__administrator::administrator_id");

                

            }

            else

            {

                $content = new stdClass();

                $content->created_date = date("Y-m-d h:i:s");

                $content->created_by = $this->session->userdata("__administrator::administrator_id");

            }



            $content->status = $this->input->post("status");

            $content->title = $this->input->post("title");

            $content->description = $this->input->post("description");

            if($_FILES['image']['size']['th'] > 0)

            {
                $_FILES['upload_file']['name']= $_FILES['image']['name']['th'];

                $_FILES['upload_file']['type']= $_FILES['image']['type']['th'];

                $_FILES['upload_file']['tmp_name']= $_FILES['image']['tmp_name']['th'];

                $_FILES['upload_file']['error']= $_FILES['image']['error']['th'];

                $_FILES['upload_file']['size']= $_FILES['image']['size']['th'];

                $fileName = date("YmdHis")."_".$this->guid_library->generate();

                $config['file_name'] = $fileName;

                $config['upload_path'] = FCPATH.'/assets/uploads/content/';

                $config['allowed_types'] = 'gif|jpg|png|jpeg';

                $config['max_size'] = '0';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                $uploadCheck = $this->upload->do_upload("upload_file");

                $upload_data = $this->upload->data();

                $file_name = $upload_data['file_name'];



                $content->image = $file_name;

                

            }

            $content_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

            if($content_validated["code"] == "0x0000-00000")

            {

                $content_id = $this->Content_model->save($content);
                $this->response_library->responseJSON($content_validated["code"], $content_validated["message"]);

            }

            else

            {

                $this->response_library->responseJSON($content_validated["code"], $content_validated["message"]);

            }

        }



		/** ------------------------------------------------------- **

		 **           PROCESS PHASE

		/** ------------------------------------------------------- **/

        $content = $this->Content_model->find($content_id);



        

		/** ------------------------------------------------------- **

		 **           RENDER VIEW PHASE

		/** ------------------------------------------------------- **/

        $data = array(

            "content" => $content

        );

        $this->load->view("AdministratorArea/Content/Edit",$data);

	}



    public function delete($content_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

        /** ------------------------------------------------------- **/

        $this->load->model("Content_model");



        $this->load->library("response_library");



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

        /** ------------------------------------------------------- **/

        $content = $this->Content_model->find($content_id);

        $content->modified_date = date("Y-m-d h:i:s");

        $content->modified_by = $this->session->userdata("__administrator::administrator_id");

        $content->status = "REMOVED";



        $content_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

        if($content_validated["code"] == "0x0000-00000")

        {

            $this->Content_model->save($content);



            $this->response_library->responseJSON($content_validated["code"], $content_validated["message"]);

        }

        else

        {

            $this->response_library->responseJSON($content_validated["code"], $content_validated["message"]);

        }

    }



    /** ------------------------------------------------------- **

     **           ADDITIONAL SCRIPT

    /** ------------------------------------------------------- **/

    public function datatables()

    {

        

            $this->load->library("datatables_library");

            $this->load->model("Content_model");



            $model_filter = new stdClass();

            $model_filter->custom_where = "status IN ('ACTIVATE','SUSPEND')";

            $content = $this->Content_model->search($model_filter);



            print_r(json_encode($content)); 

       

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



