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
        $html = $this->load->view('pdf', array('user' => $user), true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}
