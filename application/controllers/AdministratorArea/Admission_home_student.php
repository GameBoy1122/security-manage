<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admission_home_student extends CI_Controller

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

        $this->load->model("Admission_home_student_model");



        $page = new stdClass();

        $page->get_first = true;

        $page = $this->Admission_home_student_model->search($page);



        $this->load->view("AdministratorArea/Admission_home_student/Index", compact("page"));

	}



    public function page($admission_home_student_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

        /** ------------------------------------------------------- **/

        $this->load->model("Admission_home_student_model");

        

        $this->load->library("encryption_library");

        $this->load->library("response_library");

        $this->load->library("guid_library");

        /** ------------------------------------------------------- **

         **           POST PHASE

        /** ------------------------------------------------------- **/

        if($this->input->post())

        {

            if($admission_home_student_id != null)

            {

                $page = $this->admission_home_student_model->find($admission_home_student_id);

                $page->modified_date = date("Y-m-d h:i:s");

                $page->modified_by = $this->session->userdata("__administrator::administrator_id");

                

            }

            else

            {

                $page = new stdClass();

                $page->created_date = date("Y-m-d h:i:s");

                $page->created_by = $this->session->userdata("__administrator::administrator_id");

            }



            if(isset($_FILES['image']['size']['th']))

            {

                $_FILES['upload_file']['name']= $_FILES['image']['name']['th'];

                $_FILES['upload_file']['type']= $_FILES['image']['type']['th'];

                $_FILES['upload_file']['tmp_name']= $_FILES['image']['tmp_name']['th'];

                $_FILES['upload_file']['error']= $_FILES['image']['error']['th'];

                $_FILES['upload_file']['size']= $_FILES['image']['size']['th'];

                if ($_FILES['upload_file']['size'] != 0)

                {

                    if($admission_home_student_id != null)

                    {

                        $page = $this->admission_home_student_model->find($admission_home_student_id);

                        if($_FILES['image']['size']['en'] == 0 && $page->image_en == '' && $page->image_en == null)

                        {

                            $fileName = date("YmdHis")."_".$this->guid_library->generate();

                            $config['file_name'] = $fileName;

                            $config['upload_path'] = FCPATH.'/assets/image/banner/';

                            $config['allowed_types'] = 'gif|jpg|png|jpeg';

                            $config['max_size'] = '0';

                            $this->load->library('upload', $config);

                            $this->upload->initialize($config);

                            $uploadCheck = $this->upload->do_upload("upload_file");

                                $upload_data = $this->upload->data();

                                $file_name_en = $upload_data['file_name'];



                                $page->image_en = $file_name_en;

                            // print_r("if");die;

                        }

                    }

                    else

                    {

                        if($_FILES['image']['size']['en'] == 0)

                        {

                            $fileName = date("YmdHis")."_".$this->guid_library->generate();

                            $config['file_name'] = $fileName;

                            $config['upload_path'] = FCPATH.'/assets/image/banner/';

                            $config['allowed_types'] = 'gif|jpg|png|jpeg';

                            $config['max_size'] = '0';

                            $this->load->library('upload', $config);

                            $this->upload->initialize($config);

                            $uploadCheck = $this->upload->do_upload("upload_file");

                                $upload_data = $this->upload->data();

                                $file_name_en = $upload_data['file_name'];



                                $page->image_en = $file_name_en;

                        }

                    }

                    $fileName = date("YmdHis")."_".$this->guid_library->generate();

                    $config['file_name'] = $fileName;

                    $config['upload_path'] = FCPATH.'/assets/image/banner/';

                    $config['allowed_types'] = 'gif|jpg|png|jpeg';

                    $config['max_size'] = '0';

                    $this->load->library('upload', $config);

                    $this->upload->initialize($config);

                    $uploadCheck = $this->upload->do_upload("upload_file");

                    if ($uploadCheck == 1) {

                        $upload_data = $this->upload->data();

                        $file_name =   $upload_data['file_name'];



                        $page->image_th = $file_name;

                    }

                    else

                    {

                        $this->response_library->responseJSON("0x000C-U0001", $this->upload->display_errors());

                    }

                }

            }

            if(isset($_FILES['image']['size']['en']))

            {

                $_FILES['upload_file']['name']= $_FILES['image']['name']['en'];

                $_FILES['upload_file']['type']= $_FILES['image']['type']['en'];

                $_FILES['upload_file']['tmp_name']= $_FILES['image']['tmp_name']['en'];

                $_FILES['upload_file']['error']= $_FILES['image']['error']['en'];

                $_FILES['upload_file']['size']= $_FILES['image']['size']['en'];

                if ($_FILES['upload_file']['size'] != 0)

                {

                    $fileName = date("YmdHis")."_".$this->guid_library->generate();

                    $config['file_name'] = $fileName;

                    $config['upload_path'] = FCPATH.'/assets/image/banner/';

                    $config['allowed_types'] = 'gif|jpg|png|jpeg';

                    $config['max_size'] = '0';

                    $this->load->library('upload', $config);

                    $this->upload->initialize($config);

                    $uploadCheck = $this->upload->do_upload("upload_file");

                    if ($uploadCheck == 1) {

                        $upload_data = $this->upload->data();

                        $file_name =   $upload_data['file_name'];



                        $page->image_en = $file_name;

                    }

                    else

                    {

                        $this->response_library->responseJSON("0x000C-U0001", $this->upload->display_errors());

                    }

                }

            }



            $page->url = $this->input->post("url");





            $page_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

            if($page_validated["code"] == "0x0000-00000")

            {

                $admission_home_student_id = $this->admission_home_student_model->save($page);





                $this->response_library->responseJSON($page_validated["code"], $page_validated["message"]);

            }

            else

            {

                $this->response_library->responseJSON($page_validated["code"], $page_validated["message"]);

            }

        }



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

        /** ------------------------------------------------------- **/

        $page = new stdClass();

        $page->get_first = true;

        $page = $this->admission_home_student_model->search($page);

        

        /** ------------------------------------------------------- **

         **           RENDER VIEW PHASE

        /** ------------------------------------------------------- **/

        $data = array(

            "page" => $page

        );

        $this->load->view("AdministratorArea/Admission_home_student/Page",$data);

    }



	public function edit($admission_home_student_id = null)

	{

		/** ------------------------------------------------------- **

		 **           CONSTRUCT PHASE

		/** ------------------------------------------------------- **/

        $this->load->model("admission_home_student_model");
        $this->load->library("encryption_library");
        $this->load->library("response_library");
        $this->load->library("guid_library");

        $admission_home_students = $this->admission_home_student_model->search();


		/** ------------------------------------------------------- **

		 **           POST PHASE

		/** ------------------------------------------------------- **/

        if($this->input->post())

        {

            if($admission_home_student_id != null)

            {

                $admission = $this->admission_home_student_model->find($admission_home_student_id);

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

                $config['upload_path'] = FCPATH.'/assets/uploads/admission/';

                $config['allowed_types'] = 'gif|jpg|png|jpeg';

                $config['max_size'] = '0';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                $uploadCheck = $this->upload->do_upload("upload_file");

                $upload_data = $this->upload->data();

                $file_name = $upload_data['file_name'];



                $admission->image = $file_name;

                

            }

            $admission_home_student_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

            if($admission_home_student_validated["code"] == "0x0000-00000")

            {

                $admission_home_student_id = $this->admission_home_student_model->save($admission);
                $this->response_library->responseJSON($admission_home_student_validated["code"], $admission_home_student_validated["message"]);

            }

            else

            {

                $this->response_library->responseJSON($admission_home_student_validated["code"], $admission_home_student_validated["message"]);

            }

        }



		/** ------------------------------------------------------- **

		 **           PROCESS PHASE

		/** ------------------------------------------------------- **/

        $admission = $this->admission_home_student_model->find($admission_home_student_id);



        

		/** ------------------------------------------------------- **

		 **           RENDER VIEW PHASE

		/** ------------------------------------------------------- **/

        $data = array(

            "admission" => $admission

        );

        $this->load->view("AdministratorArea/Admission_home_student/Edit",$data);

	}



    public function delete($admission_home_student_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

        /** ------------------------------------------------------- **/

        $this->load->model("admission_home_student_model");



        $this->load->library("response_library");



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

        /** ------------------------------------------------------- **/

        $admission = $this->admission_home_student_model->find($admission_home_student_id);

        $admission->modified_date = date("Y-m-d h:i:s");

        $admission->modified_by = $this->session->userdata("__administrator::administrator_id");

        $admission->status = "REMOVED";



        $admission_home_student_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

        if($admission_home_student_validated["code"] == "0x0000-00000")

        {

            $this->admission_home_student_model->save($admission);



            $this->response_library->responseJSON($admission_home_student_validated["code"], $admission_home_student_validated["message"]);

        }

        else

        {

            $this->response_library->responseJSON($admission_home_student_validated["code"], $admission_home_student_validated["message"]);

        }

    }



    /** ------------------------------------------------------- **

     **           ADDITIONAL SCRIPT

    /** ------------------------------------------------------- **/

    public function datatables()

    {

        

            $this->load->library("datatables_library");

            $this->load->model("admission_home_student_model");



            $model_filter = new stdClass();

            $model_filter->custom_where = "status IN ('ACTIVATE','SUSPEND')";

            $admission = $this->admission_home_student_model->search($model_filter);



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



