<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Award extends CI_Controller

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

        $this->load->model("Award_model");



        $page = new stdClass();

        $page->get_first = true;

        $page = $this->Award_model->search($page);



        $this->load->view("AdministratorArea/Award/Index", compact("page"));

	}

	public function edit($award_id = null)

	{

		/** ------------------------------------------------------- **

		 **           CONSTRUCT PHASE

		/** ------------------------------------------------------- **/

        $this->load->model("award_model");
        $this->load->library("encryption_library");
        $this->load->library("response_library");
        $this->load->library("guid_library");

        $awards = $this->award_model->search();


		/** ------------------------------------------------------- **

		 **           POST PHASE

		/** ------------------------------------------------------- **/

        if($this->input->post())

        {

            if($award_id != null)

            {

                $award = $this->award_model->find($award_id);

                $award->modified_date = date("Y-m-d h:i:s");

                $award->modified_by = $this->session->userdata("__administrator::administrator_id");

                

            }

            else

            {

                $award = new stdClass();

                $award->created_date = date("Y-m-d h:i:s");

                $award->created_by = $this->session->userdata("__administrator::administrator_id");

            }



            $award->status = $this->input->post("status");

            $award->title = $this->input->post("title");

            $award->description = $this->input->post("description");

            if($_FILES['image']['size']['th'] > 0)

            {
                $_FILES['upload_file']['name']= $_FILES['image']['name']['th'];

                $_FILES['upload_file']['type']= $_FILES['image']['type']['th'];

                $_FILES['upload_file']['tmp_name']= $_FILES['image']['tmp_name']['th'];

                $_FILES['upload_file']['error']= $_FILES['image']['error']['th'];

                $_FILES['upload_file']['size']= $_FILES['image']['size']['th'];

                $fileName = date("YmdHis")."_".$this->guid_library->generate();

                $config['file_name'] = $fileName;

                $config['upload_path'] = FCPATH.'/assets/uploads/award/';

                $config['allowed_types'] = 'gif|jpg|png|jpeg';

                $config['max_size'] = '0';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                $uploadCheck = $this->upload->do_upload("upload_file");

                $upload_data = $this->upload->data();

                $file_name = $upload_data['file_name'];



                $award->image = $file_name;

                

            }

            $award_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

            if($award_validated["code"] == "0x0000-00000")

            {

                $award_id = $this->award_model->save($award);
                $this->response_library->responseJSON($award_validated["code"], $award_validated["message"]);

            }

            else

            {

                $this->response_library->responseJSON($award_validated["code"], $award_validated["message"]);

            }

        }



		/** ------------------------------------------------------- **

		 **           PROCESS PHASE

		/** ------------------------------------------------------- **/

        $award = $this->award_model->find($award_id);



        

		/** ------------------------------------------------------- **

		 **           RENDER VIEW PHASE

		/** ------------------------------------------------------- **/

        $data = array(

            "award" => $award

        );

        $this->load->view("AdministratorArea/Award/Edit",$data);

	}



    public function delete($award_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

        /** ------------------------------------------------------- **/

        $this->load->model("award_model");



        $this->load->library("response_library");



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

        /** ------------------------------------------------------- **/

        $award = $this->award_model->find($award_id);

        $award->modified_date = date("Y-m-d h:i:s");

        $award->modified_by = $this->session->userdata("__administrator::administrator_id");

        $award->status = "REMOVED";



        $award_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

        if($award_validated["code"] == "0x0000-00000")

        {

            $this->award_model->save($award);



            $this->response_library->responseJSON($award_validated["code"], $award_validated["message"]);

        }

        else

        {

            $this->response_library->responseJSON($award_validated["code"], $award_validated["message"]);

        }

    }



    /** ------------------------------------------------------- **

     **           ADDITIONAL SCRIPT

    /** ------------------------------------------------------- **/

    public function datatables()

    {

        

            $this->load->library("datatables_library");

            $this->load->model("award_model");



            $model_filter = new stdClass();

            $model_filter->custom_where = "status IN ('ACTIVATE','SUSPEND')";

            $award = $this->award_model->search($model_filter);



            print_r(json_encode($award)); 

       

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



