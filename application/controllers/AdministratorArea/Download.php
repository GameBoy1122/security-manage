<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Download extends CI_Controller

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

        $this->load->model("Download_model");



        $page = new stdClass();

        $page->get_first = true;

        $page = $this->Download_model->search($page);



        $this->load->view("AdministratorArea/Download/Index", compact("page"));
    }

    public function edit($Download_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

		/** ------------------------------------------------------- **/

        $this->load->model("Download_model");
        $this->load->library("encryption_library");
        $this->load->library("response_library");
        $this->load->library("guid_library");

        $Downloads = $this->Download_model->search();


        /** ------------------------------------------------------- **

         **           POST PHASE

		/** ------------------------------------------------------- **/

        if ($this->input->post()) {

            if ($Download_id != null) {

                $Download = $this->Download_model->find($Download_id);

                $Download->modified_date = date("Y-m-d h:i:s");

                $Download->modified_by = $this->session->userdata("__administrator::administrator_id");
            } else {

                $Download = new stdClass();

                $Download->created_date = date("Y-m-d h:i:s");

                $Download->created_by = $this->session->userdata("__administrator::administrator_id");
            }



            $Download->status = $this->input->post("status");

            $Download->title = $this->input->post("title");
            
            $sort = $this->input->post("sort");
            if (empty($sort)) {
                $model_filter = new stdClass();
                $model_filter->select = "*";
                $model_filter->where["Download.status"] = 'ACTIVATE';
                $model_filter->order_by = "Download.sort desc";
                $model_filter->get_first = true;
                $last_data = $this->Download_model->search($model_filter);
                $sort = ($last_data == null ? 0 : $last_data->sort) + 1;
            }

            $Download->sort = $sort;



            if ($_FILES['image']['size']['th'] > 0) {
                $_FILES['upload_file']['name'] = $_FILES['image']['name']['th'];

                $_FILES['upload_file']['type'] = $_FILES['image']['type']['th'];

                $_FILES['upload_file']['tmp_name'] = $_FILES['image']['tmp_name']['th'];

                $_FILES['upload_file']['error'] = $_FILES['image']['error']['th'];

                $_FILES['upload_file']['size'] = $_FILES['image']['size']['th'];

                $fileName = date("YmdHis") . "_" . $this->guid_library->generate();

                $config['file_name'] = $fileName;

                $config['upload_path'] = FCPATH . '/assets/uploads/Download/';

                $config['allowed_types'] = 'gif|jpg|png|jpeg';

                $config['max_size'] = '0';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                $uploadCheck = $this->upload->do_upload("upload_file");

                $upload_data = $this->upload->data();

                $file_name = $upload_data['file_name'];

                $Download->file = '/assets/uploads/Download/' . $file_name;
            }
            $this->sortHistory();
            $Download_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

            if ($Download_validated["code"] == "0x0000-00000") {

                $Download_id = $this->Download_model->save($Download);
                $this->response_library->responseJSON($Download_validated["code"], $Download_validated["message"]);
            } else {

                $this->response_library->responseJSON($Download_validated["code"], $Download_validated["message"]);
            }
        }



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

		/** ------------------------------------------------------- **/

        $Download = $this->Download_model->find($Download_id);





        /** ------------------------------------------------------- **

         **           RENDER VIEW PHASE

		/** ------------------------------------------------------- **/

        $data = array(

            "Download" => $Download

        );

        $this->load->view("AdministratorArea/Download/Edit", $data);
    }

    public function sortHistory($parent_id = null)
    {
        $this->load->model("Download_model");

        $model_filter = new stdClass();
        $model_filter->select = "Download.Download_id as id, Download.sort as sort";
        $model_filter->where["Download.status"] = 'ACTIVATE';
        $model_filter->custom_where = "(Download.status = 'ACTIVATE')";
        $model_filter->order_by = "Download.sort asc, Download.modified_date desc, Download.created_date desc";
        $datas = $this->Download_model->search($model_filter);
        $i = 1;
        if ($datas != null && count($datas) > 0) {
            foreach ($datas as $item) {
                $Qualified = $this->Download_model->find($item->id);
                $Qualified->sort = $i;
                $this->Download_model->save($Qualified);
                $i++;
            }
        }
    }

    public function delete($Download_id = null)

    {

        /** ------------------------------------------------------- **

         **           CONSTRUCT PHASE

        /** ------------------------------------------------------- **/

        $this->load->model("Download_model");



        $this->load->library("response_library");



        /** ------------------------------------------------------- **

         **           PROCESS PHASE

        /** ------------------------------------------------------- **/

        $Download = $this->Download_model->find($Download_id);

        $Download->modified_date = date("Y-m-d h:i:s");

        $Download->modified_by = $this->session->userdata("__administrator::administrator_id");

        $Download->status = "REMOVED";



        $Download_validated = array("code" => "0x0000-00000", "message" => "Server response success. Request process complete with no error.");

        if ($Download_validated["code"] == "0x0000-00000") {

            $this->Download_model->save($Download);



            $this->response_library->responseJSON($Download_validated["code"], $Download_validated["message"]);
        } else {

            $this->response_library->responseJSON($Download_validated["code"], $Download_validated["message"]);
        }
    }



    /** ------------------------------------------------------- **

     **           ADDITIONAL SCRIPT

    /** ------------------------------------------------------- **/

    public function datatables()

    {



        $this->load->library("datatables_library");

        $this->load->model("Download_model");



        $model_filter = new stdClass();

        $model_filter->custom_where = "status IN ('ACTIVATE','SUSPEND')";

        $Download = $this->Download_model->search($model_filter);



        print_r(json_encode($Download));
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
