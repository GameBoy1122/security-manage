<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Director extends CI_Controller

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

        $this->load->model("Director_model");



        $page = new stdClass();

        $page->get_first = true;

        $page = $this->Director_model->search($page);



        $this->load->view("AdministratorArea/Director/Index", compact("page"));

	}

	public function edit($Director_id = null)

	{

		/** ------------------------------------------------------- **

		 **           CONSTRUCT PHASE

		/** ------------------------------------------------------- **/

        $this->load->model("Director_model");
        $this->load->library("encryption_library");
        $this->load->library("response_library");
        $this->load->library("guid_library");

        $Directors = $this->Director_model->search();


		/** ------------------------------------------------------- **

		 **           POST PHASE

		/** ------------------------------------------------------- **/

        if($this->input->post())

        {

            if($Director_id != null)

            {

                $Director = $this->Director_model->find($Director_id);

                $Director->modified_date = date("Y-m-d h:i:s");

                $Director->modified_by = $this->session->userdata("__administrator::administrator_id");

                

            }

            else

            {

                $Director = new stdClass();

                $Director->created_date = date("Y-m-d h:i:s");

                $Director->created_by = $this->session->userdata("__administrator::administrator_id");

            }



            $Director->status = $this->input->post("status");

            $Director->title = $this->input->post("title");
            
            $Director->description = $this->input->post("description");
            $Director->link = $this->input->post("link");


            

            if($_FILES['image']['size']['th'] > 0)

            {
                $_FILES['upload_file']['name']= $_FILES['image']['name']['th'];

                $_FILES['upload_file']['type']= $_FILES['image']['type']['th'];

                $_FILES['upload_file']['tmp_name']= $_FILES['image']['tmp_name']['th'];

                $_FILES['upload_file']['error']= $_FILES['image']['error']['th'];

                $_FILES['upload_file']['size']= $_FILES['image']['size']['th'];

                $fileName = date("YmdHis")."_".$this->guid_library->generate();

                $config['file_name'] = $fileName;

                $config['upload_path'] = FCPATH.'/assets/uploads/Director/';

                $config['allowed_types'] = 'gif|jpg|png|jpeg';

                $config['max_size'] = '0';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                $uploadCheck = $this->upload->do_upload("upload_file");

                $upload_data = $this->upload->data();

                $file_name = $upload_data['file_name'];



                $Director->image = '/assets/uploads/Director/'.$file_name;

                

            }

            $Director_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

            if($Director_validated["code"] == "0x0000-00000")

            {

                $Director_id = $this->Director_model->save($Director);
                $this->response_library->responseJSON($Director_validated["code"], $Director_validated["message"]);

            }

            else

            {

                $this->response_library->responseJSON($Director_validated["code"], $Director_validated["message"]);

            }

        }



		/** ------------------------------------------------------- **

		 **           PROCESS PHASE

		/** ------------------------------------------------------- **/

        $Director = $this->Director_model->find($Director_id);



        

		/** ------------------------------------------------------- **

		 **           RENDER VIEW PHASE

		/** ------------------------------------------------------- **/

        $data = array(

            "Director" => $Director

        );

        $this->load->view("AdministratorArea/Director/Edit",$data);

	}



    public function delete($Director_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

        /** ------------------------------------------------------- **/

        $this->load->model("Director_model");



        $this->load->library("response_library");



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

        /** ------------------------------------------------------- **/

        $Director = $this->Director_model->find($Director_id);

        $Director->modified_date = date("Y-m-d h:i:s");

        $Director->modified_by = $this->session->userdata("__administrator::administrator_id");

        $Director->status = "REMOVED";



        $Director_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

        if($Director_validated["code"] == "0x0000-00000")

        {

            $this->Director_model->save($Director);



            $this->response_library->responseJSON($Director_validated["code"], $Director_validated["message"]);

        }

        else

        {

            $this->response_library->responseJSON($Director_validated["code"], $Director_validated["message"]);

        }

    }



    /** ------------------------------------------------------- **

     **           ADDITIONAL SCRIPT

    /** ------------------------------------------------------- **/

    public function datatables()

    {

        

            $this->load->library("datatables_library");

            $this->load->model("Director_model");



            $model_filter = new stdClass();

            $model_filter->custom_where = "status IN ('ACTIVATE','SUSPEND')";

            $Director = $this->Director_model->search($model_filter);



            print_r(json_encode($Director)); 

       

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



