<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Course_steering_committee extends CI_Controller

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

        $this->load->model("Course_steering_committee_model");



        $page = new stdClass();

        $page->get_first = true;

        $page = $this->Course_steering_committee_model->search($page);



        $this->load->view("AdministratorArea/Course_steering_committee/Index", compact("page"));
    }

    public function edit($Course_steering_committee_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

		/** ------------------------------------------------------- **/

        $this->load->model("Course_steering_committee_model");
        $this->load->library("encryption_library");
        $this->load->library("response_library");
        $this->load->library("guid_library");

        $Course_steering_committees = $this->Course_steering_committee_model->search();


        /** ------------------------------------------------------- **

         **           POST PHASE

		/** ------------------------------------------------------- **/

        if ($this->input->post()) {

            if ($Course_steering_committee_id != null) {

                $Course_steering_committee = $this->Course_steering_committee_model->find($Course_steering_committee_id);

                $Course_steering_committee->modified_date = date("Y-m-d h:i:s");

                $Course_steering_committee->modified_by = $this->session->userdata("__administrator::administrator_id");
            } else {

                $Course_steering_committee = new stdClass();

                $Course_steering_committee->created_date = date("Y-m-d h:i:s");

                $Course_steering_committee->created_by = $this->session->userdata("__administrator::administrator_id");
            }



            $Course_steering_committee->status = $this->input->post("status");

            $Course_steering_committee->name = $this->input->post("name");

            $Course_steering_committee->position = $this->input->post("position");

            $sort = $this->input->post("sort");
            if (empty($sort)) {
                $model_filter = new stdClass();
                $model_filter->select = "*";
                $model_filter->where["Course_steering_committee.status"] = 'ACTIVATE';
                $model_filter->order_by = "Course_steering_committee.sort desc";
                $model_filter->get_first = true;
                $last_data = $this->Course_steering_committee_model->search($model_filter);
                $sort = ($last_data == null ? 0 : $last_data->sort) + 1;
            }

            $Course_steering_committee->sort = $sort;



            if ($_FILES['image']['size']['th'] > 0) {
                $_FILES['upload_file']['name'] = $_FILES['image']['name']['th'];

                $_FILES['upload_file']['type'] = $_FILES['image']['type']['th'];

                $_FILES['upload_file']['tmp_name'] = $_FILES['image']['tmp_name']['th'];

                $_FILES['upload_file']['error'] = $_FILES['image']['error']['th'];

                $_FILES['upload_file']['size'] = $_FILES['image']['size']['th'];

                $fileName = date("YmdHis") . "_" . $this->guid_library->generate();

                $config['file_name'] = $fileName;

                $config['upload_path'] = FCPATH . '/assets/uploads/Course_steering_committee/';

                $config['allowed_types'] = 'gif|jpg|png|jpeg';

                $config['max_size'] = '0';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                $uploadCheck = $this->upload->do_upload("upload_file");

                $upload_data = $this->upload->data();

                $file_name = $upload_data['file_name'];

                $Course_steering_committee->image = '/assets/uploads/Course_steering_committee/' . $file_name;
            }
            $this->sortHistory();
            $Course_steering_committee_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

            if ($Course_steering_committee_validated["code"] == "0x0000-00000") {

                $Course_steering_committee_id = $this->Course_steering_committee_model->save($Course_steering_committee);
                $this->response_library->responseJSON($Course_steering_committee_validated["code"], $Course_steering_committee_validated["message"]);
            } else {

                $this->response_library->responseJSON($Course_steering_committee_validated["code"], $Course_steering_committee_validated["message"]);
            }
        }



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

		/** ------------------------------------------------------- **/

        $Course_steering_committee = $this->Course_steering_committee_model->find($Course_steering_committee_id);





        /** ------------------------------------------------------- **

         **           RENDER VIEW PHASE

		/** ------------------------------------------------------- **/

        $data = array(

            "Course_steering_committee" => $Course_steering_committee

        );

        $this->load->view("AdministratorArea/Course_steering_committee/Edit", $data);
    }

    public function sortHistory($parent_id = null)
    {
        $this->load->model("Course_steering_committee_model");

        $model_filter = new stdClass();
        $model_filter->select = "Course_steering_committee.Course_steering_committee_id as id, Course_steering_committee.sort as sort";
        $model_filter->where["Course_steering_committee.status"] = 'ACTIVATE';
        $model_filter->custom_where = "(Course_steering_committee.status = 'ACTIVATE')";
        $model_filter->order_by = "Course_steering_committee.sort asc, Course_steering_committee.modified_date desc, Course_steering_committee.created_date desc";
        $datas = $this->Course_steering_committee_model->search($model_filter);
        $i = 1;
        if ($datas != null && count($datas) > 0) {
            foreach ($datas as $item) {
                $Qualified = $this->Course_steering_committee_model->find($item->id);
                $Qualified->sort = $i;
                $this->Course_steering_committee_model->save($Qualified);
                $i++;
            }
        }
    }

    public function delete($Course_steering_committee_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

        /** ------------------------------------------------------- **/

        $this->load->model("Course_steering_committee_model");



        $this->load->library("response_library");



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

        /** ------------------------------------------------------- **/

        $Course_steering_committee = $this->Course_steering_committee_model->find($Course_steering_committee_id);

        $Course_steering_committee->modified_date = date("Y-m-d h:i:s");

        $Course_steering_committee->modified_by = $this->session->userdata("__administrator::administrator_id");

        $Course_steering_committee->status = "REMOVED";



        $Course_steering_committee_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

        if ($Course_steering_committee_validated["code"] == "0x0000-00000") {

            $this->Course_steering_committee_model->save($Course_steering_committee);



            $this->response_library->responseJSON($Course_steering_committee_validated["code"], $Course_steering_committee_validated["message"]);
        } else {

            $this->response_library->responseJSON($Course_steering_committee_validated["code"], $Course_steering_committee_validated["message"]);
        }
    }



    /** ------------------------------------------------------- **

     **           ADDITIONAL SCRIPT

    /** ------------------------------------------------------- **/

    public function datatables()

    {



        $this->load->library("datatables_library");

        $this->load->model("Course_steering_committee_model");



        $model_filter = new stdClass();

        $model_filter->custom_where = "status IN ('ACTIVATE','SUSPEND')";

        $Course_steering_committee = $this->Course_steering_committee_model->search($model_filter);



        print_r(json_encode($Course_steering_committee));
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



        foreach ($slide_orders as $order => $banner_id) {

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
