<?php

use Dompdf\Dompdf;
use Dompdf\Options;

class Genpdf extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('user_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $users = $this->user_model->getUsers();
        $this->load->view('users', array('users' => $users));
    }

    public function download($id)
    {
        $user = $this->user_model->getUser($id);
        $html = $this->load->view('pdf', array('user' => $user), true);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html, 'UTF-8');
        $dompdf->render();
        $dompdf->stream();
    }
    public function details($id)
    {
        $user = $this->user_model->getUser($id);
        $this->load->view('pdf', compact('user'));
    }
    public function mpdf($id)
    {
        //custom font
        $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $mpdf = new \Mpdf\Mpdf([
            'fontDir' => array_merge($fontDirs, [
                __DIR__ . 'assets/fonts',
            ]),
            'fontdata' => $fontData + [
                'sarabun' => [
                    'R' => 'THSarabunNew.ttf',
                    'I' => 'THSarabunNew Italic.ttf',
                    'B' =>  'THSarabunNew Bold.ttf',
                ]
            ],
        ]);

        $user = $this->user_model->getUser($id);
        $this->db->select('provinces.name_th as provinces,');
        $this->db->where('provinces.id', $user->address_province);
        $provinces_user = $this->db->get('provinces')->row();

        $this->db->select('provinces.name_th as provinces,');
        $this->db->where('provinces.id', $user->address_province);
        $provinces_work = $this->db->get('provinces')->row();

        $this->db->select('districts.name_th as districts,');
        $this->db->where('districts.id', $user->address_district);
        $districts_user = $this->db->get('districts')->row();

        $this->db->select('districts.name_th as districts,');
        $this->db->where('districts.id', $user->work_district);
        $districts_work = $this->db->get('districts')->row();

        $this->db->select('sub_districts.name_th as sub_districts,');
        $this->db->where('sub_districts.id', $user->address_subdistrict);
        $sub_districts_user = $this->db->get('sub_districts')->row();

        $this->db->select('sub_districts.name_th as sub_districts,');
        $this->db->where('sub_districts.id', $user->address_subdistrict);
        $sub_districts_work = $this->db->get('sub_districts')->row();

        // $html = $this->load->view('pdf', compact('user', 'provinces_user', 'districts_user', 'sub_districts_user'));

        $html = $this->load->view('pdf', array('user' => $user, 'provinces_user' => $provinces_user, 'districts_user' => $districts_user, 'sub_districts_user' => $sub_districts_user, 'provinces_work' => $provinces_work, 'districts_work' => $districts_work, 'sub_districts_work' => $sub_districts_work), true);
        $name_th = $user->name_th;
        $mpdf->WriteHTML($html);
        // $mpdf->Output('');
        $mpdf->Output('ใบสมัคร_' .  $user->name_th . '.pdf', 'D');
    }

    public function zip()
    {
        $this->load->library('zip');
    }
}
