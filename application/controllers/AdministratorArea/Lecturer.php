<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Lecturer extends CI_Controller

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

        $this->load->model("Lecturer_model");



        $page = new stdClass();

        $page->get_first = true;

        $page = $this->Lecturer_model->search($page);



        $this->load->view("AdministratorArea/Lecturer/Index", compact("page"));
    }

    public function edit($Lecturer_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

		/** ------------------------------------------------------- **/

        $this->load->model("Lecturer_model");
        $this->load->library("encryption_library");
        $this->load->library("response_library");
        $this->load->library("guid_library");

        $Lecturers = $this->Lecturer_model->search();


        /** ------------------------------------------------------- **

         **           POST PHASE

		/** ------------------------------------------------------- **/

        if ($this->input->post()) {

            if ($Lecturer_id != null) {

                $Lecturer = $this->Lecturer_model->find($Lecturer_id);

                $Lecturer->modified_date = date("Y-m-d h:i:s");

                $Lecturer->modified_by = $this->session->userdata("__administrator::administrator_id");
            } else {

                $Lecturer = new stdClass();

                $Lecturer->created_date = date("Y-m-d h:i:s");

                $Lecturer->created_by = $this->session->userdata("__administrator::administrator_id");
            }



            $Lecturer->status = $this->input->post("status");

            $Lecturer->name = $this->input->post("name");

            $Lecturer->position = $this->input->post("position");

            $sort = $this->input->post("sort");
            if (empty($sort)) {
                $model_filter = new stdClass();
                $model_filter->select = "*";
                $model_filter->where["Lecturer.status"] = 'ACTIVATE';
                $model_filter->order_by = "Lecturer.sort desc";
                $model_filter->get_first = true;
                $last_data = $this->Lecturer_model->search($model_filter);
                $sort = ($last_data == null ? 0 : $last_data->sort) + 1;
            }

            $Lecturer->sort = $sort;



            if ($_FILES['image']['size']['th'] > 0) {
                $_FILES['upload_file']['name'] = $_FILES['image']['name']['th'];

                $_FILES['upload_file']['type'] = $_FILES['image']['type']['th'];

                $_FILES['upload_file']['tmp_name'] = $_FILES['image']['tmp_name']['th'];

                $_FILES['upload_file']['error'] = $_FILES['image']['error']['th'];

                $_FILES['upload_file']['size'] = $_FILES['image']['size']['th'];

                $fileName = date("YmdHis") . "_" . $this->guid_library->generate();

                $config['file_name'] = $fileName;

                $config['upload_path'] = FCPATH . '/assets/uploads/Lecturer/';

                $config['allowed_types'] = 'gif|jpg|png|jpeg';

                $config['max_size'] = '0';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                $uploadCheck = $this->upload->do_upload("upload_file");

                $upload_data = $this->upload->data();

                $file_name = $upload_data['file_name'];

                $Lecturer->image = '/assets/uploads/Lecturer/' . $file_name;
            }
            $this->sortHistory();
            $Lecturer_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

            if ($Lecturer_validated["code"] == "0x0000-00000") {

                $Lecturer_id = $this->Lecturer_model->save($Lecturer);
                $this->response_library->responseJSON($Lecturer_validated["code"], $Lecturer_validated["message"]);
            } else {

                $this->response_library->responseJSON($Lecturer_validated["code"], $Lecturer_validated["message"]);
            }
        }



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

		/** ------------------------------------------------------- **/

        $Lecturer = $this->Lecturer_model->find($Lecturer_id);





        /** ------------------------------------------------------- **

         **           RENDER VIEW PHASE

		/** ------------------------------------------------------- **/

        $data = array(

            "Lecturer" => $Lecturer

        );

        $this->load->view("AdministratorArea/Lecturer/Edit", $data);
    }

    public function sortHistory($parent_id = null)
    {
        $this->load->model("Lecturer_model");

        $model_filter = new stdClass();
        $model_filter->select = "Lecturer.Lecturer_id as id, Lecturer.sort as sort";
        $model_filter->where["Lecturer.status"] = 'ACTIVATE';
        $model_filter->custom_where = "(Lecturer.status = 'ACTIVATE')";
        $model_filter->order_by = "Lecturer.sort asc, Lecturer.modified_date desc, Lecturer.created_date desc";
        $datas = $this->Lecturer_model->search($model_filter);
        $i = 1;
        if ($datas != null && count($datas) > 0) {
            foreach ($datas as $item) {
                $Qualified = $this->Lecturer_model->find($item->id);
                $Qualified->sort = $i;
                $this->Lecturer_model->save($Qualified);
                $i++;
            }
        }
    }

    public function delete($Lecturer_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

        /** ------------------------------------------------------- **/

        $this->load->model("Lecturer_model");



        $this->load->library("response_library");



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

        /** ------------------------------------------------------- **/

        $Lecturer = $this->Lecturer_model->find($Lecturer_id);

        $Lecturer->modified_date = date("Y-m-d h:i:s");

        $Lecturer->modified_by = $this->session->userdata("__administrator::administrator_id");

        $Lecturer->status = "REMOVED";



        $Lecturer_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

        if ($Lecturer_validated["code"] == "0x0000-00000") {

            $this->Lecturer_model->save($Lecturer);



            $this->response_library->responseJSON($Lecturer_validated["code"], $Lecturer_validated["message"]);
        } else {

            $this->response_library->responseJSON($Lecturer_validated["code"], $Lecturer_validated["message"]);
        }
    }



    /** ------------------------------------------------------- **

     **           ADDITIONAL SCRIPT

    /** ------------------------------------------------------- **/

    public function datatables()

    {



        $this->load->library("datatables_library");

        $this->load->model("Lecturer_model");



        $model_filter = new stdClass();

        $model_filter->custom_where = "status IN ('ACTIVATE','SUSPEND')";

        $Lecturer = $this->Lecturer_model->search($model_filter);



        print_r(json_encode($Lecturer));
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
