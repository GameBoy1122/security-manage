<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Course_staff extends CI_Controller

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

        $this->load->model("Course_staff_model");



        $page = new stdClass();

        $page->get_first = true;

        $page = $this->Course_staff_model->search($page);



        $this->load->view("AdministratorArea/Course_staff/Index", compact("page"));
    }

    public function edit($Course_staff_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

		/** ------------------------------------------------------- **/

        $this->load->model("Course_staff_model");
        $this->load->library("encryption_library");
        $this->load->library("response_library");
        $this->load->library("guid_library");

        $Course_staffs = $this->Course_staff_model->search();


        /** ------------------------------------------------------- **

         **           POST PHASE

		/** ------------------------------------------------------- **/

        if ($this->input->post()) {

            if ($Course_staff_id != null) {

                $Course_staff = $this->Course_staff_model->find($Course_staff_id);

                $Course_staff->modified_date = date("Y-m-d h:i:s");

                $Course_staff->modified_by = $this->session->userdata("__administrator::administrator_id");
            } else {

                $Course_staff = new stdClass();

                $Course_staff->created_date = date("Y-m-d h:i:s");

                $Course_staff->created_by = $this->session->userdata("__administrator::administrator_id");
            }



            $Course_staff->status = $this->input->post("status");

            $Course_staff->name = $this->input->post("name");

            $Course_staff->position = $this->input->post("position");

            $sort = $this->input->post("sort");
            if (empty($sort)) {
                $model_filter = new stdClass();
                $model_filter->select = "*";
                $model_filter->where["Course_staff.status"] = 'ACTIVATE';
                $model_filter->order_by = "Course_staff.sort desc";
                $model_filter->get_first = true;
                $last_data = $this->Course_staff_model->search($model_filter);
                $sort = ($last_data == null ? 0 : $last_data->sort) + 1;
            }

            $Course_staff->sort = $sort;



            if ($_FILES['image']['size']['th'] > 0) {
                $_FILES['upload_file']['name'] = $_FILES['image']['name']['th'];

                $_FILES['upload_file']['type'] = $_FILES['image']['type']['th'];

                $_FILES['upload_file']['tmp_name'] = $_FILES['image']['tmp_name']['th'];

                $_FILES['upload_file']['error'] = $_FILES['image']['error']['th'];

                $_FILES['upload_file']['size'] = $_FILES['image']['size']['th'];

                $fileName = date("YmdHis") . "_" . $this->guid_library->generate();

                $config['file_name'] = $fileName;

                $config['upload_path'] = FCPATH . '/assets/uploads/Course_staff/';

                $config['allowed_types'] = 'gif|jpg|png|jpeg';

                $config['max_size'] = '0';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                $uploadCheck = $this->upload->do_upload("upload_file");

                $upload_data = $this->upload->data();

                $file_name = $upload_data['file_name'];

                $Course_staff->image = '/assets/uploads/Course_staff/' . $file_name;
            }
            $this->sortHistory();
            $Course_staff_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

            if ($Course_staff_validated["code"] == "0x0000-00000") {

                $Course_staff_id = $this->Course_staff_model->save($Course_staff);
                $this->response_library->responseJSON($Course_staff_validated["code"], $Course_staff_validated["message"]);
            } else {

                $this->response_library->responseJSON($Course_staff_validated["code"], $Course_staff_validated["message"]);
            }
        }



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

		/** ------------------------------------------------------- **/

        $Course_staff = $this->Course_staff_model->find($Course_staff_id);





        /** ------------------------------------------------------- **

         **           RENDER VIEW PHASE

		/** ------------------------------------------------------- **/

        $data = array(

            "Course_staff" => $Course_staff

        );

        $this->load->view("AdministratorArea/Course_staff/Edit", $data);
    }

    public function sortHistory($parent_id = null)
    {
        $this->load->model("Course_staff_model");

        $model_filter = new stdClass();
        $model_filter->select = "Course_staff.Course_staff_id as id, Course_staff.sort as sort";
        $model_filter->where["Course_staff.status"] = 'ACTIVATE';
        $model_filter->custom_where = "(Course_staff.status = 'ACTIVATE')";
        $model_filter->order_by = "Course_staff.sort asc, Course_staff.modified_date desc, Course_staff.created_date desc";
        $datas = $this->Course_staff_model->search($model_filter);
        $i = 1;
        if ($datas != null && count($datas) > 0) {
            foreach ($datas as $item) {
                $Qualified = $this->Course_staff_model->find($item->id);
                $Qualified->sort = $i;
                $this->Course_staff_model->save($Qualified);
                $i++;
            }
        }
    }

    public function delete($Course_staff_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

        /** ------------------------------------------------------- **/

        $this->load->model("Course_staff_model");



        $this->load->library("response_library");



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

        /** ------------------------------------------------------- **/

        $Course_staff = $this->Course_staff_model->find($Course_staff_id);

        $Course_staff->modified_date = date("Y-m-d h:i:s");

        $Course_staff->modified_by = $this->session->userdata("__administrator::administrator_id");

        $Course_staff->status = "REMOVED";



        $Course_staff_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

        if ($Course_staff_validated["code"] == "0x0000-00000") {

            $this->Course_staff_model->save($Course_staff);



            $this->response_library->responseJSON($Course_staff_validated["code"], $Course_staff_validated["message"]);
        } else {

            $this->response_library->responseJSON($Course_staff_validated["code"], $Course_staff_validated["message"]);
        }
    }



    /** ------------------------------------------------------- **

     **           ADDITIONAL SCRIPT

    /** ------------------------------------------------------- **/

    public function datatables()

    {



        $this->load->library("datatables_library");

        $this->load->model("Course_staff_model");



        $model_filter = new stdClass();

        $model_filter->custom_where = "status IN ('ACTIVATE','SUSPEND')";

        $Course_staff = $this->Course_staff_model->search($model_filter);



        print_r(json_encode($Course_staff));
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
