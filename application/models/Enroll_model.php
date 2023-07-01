<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Enroll_model extends CI_Model
{
    function Enroll($postData)
    {
        $response = "";
        if ($postData['id_cardname'] != '') {
            // Check entry
            $this->db->select('count(*) as allcount');
            $this->db->where('id_cardname', $postData['id_cardname']);
            $enroll = $this->db->get('enroll');
            $enroll_check = $enroll->result_array();

            if ($enroll_check[0]['allcount'] == 0) {
                // Insert record
                $data = array(
                    "enroll_id" => null,
                    "status" => $postData['status'],
                    "name_th" => $postData['name_th'],
                    "name_en" => $postData['name_en'],
                    "nickname" => $postData['nickname'],
                    "id_cardname" => $postData['id_cardname'],
                    "shirt_select" => $postData['shirt_select'],
                    "birthday_day" => $postData['birthday_day'],
                    "birthday_month" => $postData['birthday_month'],
                    "birthday_year" => $postData['birthday_year'],
                    "ethnicity" => $postData['ethnicity'],
                    "nationality" => $postData['nationality'],
                    "religion" => $postData['religion'],
                    "current_position" => $postData['current_position'],
                    "address_no" => $postData['address_no'],
                    "address_alley" => $postData['address_alley'],
                    "address_road" => $postData['address_road'],
                    "address_province" => $postData['address_province'],
                    "address_district" => $postData['address_district'],
                    "address_subdistrict" => $postData['address_subdistrict'],
                    "address_postcode" => $postData['address_postcode'],
                    "work_address" => $postData['work_address'],
                    "work_mobile" => $postData['work_mobile'],
                    "work_fax" => $postData['work_fax'],
                    "work_house" => $postData['work_house'],
                    "work_email" => $postData['work_email'],
                    "work_name" => $postData['work_name'],
                    "work_no" => $postData['work_no'],
                    "work_alley" => $postData['work_alley'],
                    "work_road" => $postData['work_road'],
                    "work_province" => $postData['work_province'],
                    "work_district" => $postData['work_district'],
                    "work_subdistrict" => $postData['work_subdistrict'],
                    "work_postcode" => $postData['work_postcode'],
                    "marital_status" => $postData['marital_status'],
                    "marital_name" => $postData['marital_name'],
                    "marital_job" => $postData['marital_job'],
                    "marital_day" => $postData['marital_day'],
                    "marital_month" => $postData['marital_month'],
                    "marital_year" => $postData['marital_year'],
                    "marital_ethnicity" => $postData['marital_ethnicity'],
                    "marital_nationality" => $postData['marital_nationality'],
                    "marital_religion" => $postData['marital_religion'],
                    "secondary_education_branch" => $postData['secondary_education_branch'],
                    "secondary_education_academy" => $postData['secondary_education_academy'],
                    "secondary_education_year" => $postData['secondary_education_year'],
                    "bachelors_degree_branch" => $postData['bachelors_degree_branch'],
                    "bachelors_degree_academy" => $postData['bachelors_degree_academy'],
                    "bachelors_degree_year" => $postData['bachelors_degree_year'],
                    "masters_degree_branch" => $postData['masters_degree_branch'],
                    "masters_degree_academy" => $postData['masters_degree_academy'],
                    "masters_degree_year" => $postData['masters_degree_year'],
                    "doctorate_branch" => $postData['doctorate_branch'],
                    "doctorate_academy" => $postData['doctorate_academy'],
                    "doctorate_year" => $postData['doctorate_year'],
                    "training_course_information" => $postData['training_course_information'],
                    "workinfo_work_history" => $postData['workinfo_work_history'],
                    "workinfo_position" => $postData['workinfo_position'],
                    "workinfo_companyname" => $postData['workinfo_companyname'],
                    "workinfo_jobtype" => $postData['workinfo_jobtype'],
                    "workinfo_position_2" => $postData['workinfo_position_2'],
                    "workinfo_companyname_2" => $postData['workinfo_companyname_2'],
                    "workinfo_jobtype_2" => $postData['workinfo_jobtype_2'],
                    "workinfo_workdetails" => $postData['workinfo_workdetails'],
                    "workinfo_responsibility" => $postData['workinfo_responsibility'],
                    "achievements_job" => $postData['achievements_job'],
                    "abilities" => $postData['abilities'],
                    "desire" => $postData['desire'],
                    "course_regulations" => $postData['course_regulations'],
                    "file_idcard" => $postData['file_idcard'],
                    "file_house_registration" => $postData['file_house_registration'],
                    "file_photo" => $postData['file_photo'],
                    "file_certificate" => $postData['file_certificate'],
                );
                $this->db->insert('enroll', $data);
                $response = array('code' => '0x0000-00000', 'message' => 'The sever respone success.', 'data' => null,);
                $response = json_encode($response);
            } else {
                $response = array('code' => '1x0000-00000', 'message' => 'The server response enroll name in duplicate.', 'data' => null,);
                $response = json_encode($response);
            }
        } else {
            $response = array('code' => '2x0000-00000', 'message' => 'The sever respone fail.', 'data' => null,);
            $response = json_encode($response);
        }

        return $response;
    }
}
