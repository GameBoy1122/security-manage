 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class banner extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    	$this->load->model("Banner_model");

    	$this->load->library("Encryption_library");
        $this->load->library("Mobile_detect_library");
        $this->load->library("Response_library");


			$model_filter = new stdClass();
            $model_filter->where["status"] = "ACTIVATE";
            $banner = $this->Banner_model->search($model_filter);

            // $result = {
            //     "status": 200,
            //     "code":"0x0000-00000",
            //     "message":"success",
            //     "data": $banner
            // }

            print_r(json_encode($banner)); 

    }
}