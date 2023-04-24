<?php
class ProvinsiController extends CI_Controller {
        public function __construct()
        {
                parent::__construct();
                $this->load->model('ProvinsiModel');
                $this->load->helper('url_helper');
        }
        public function index()
        {
                $allProvinsi = $this->ProvinsiModel->allProvinsi();
                $data['provinsis'] = $allProvinsi;
                $this->load->view('kota', $data);
        }
        public function kota()
        {
                $provinsiId = $this->uri->segment(2);
                $kotaFromProvinsi = $this->ProvinsiModel->kotaFromProvinsi($provinsiId);
                header('Content-Type: application/json');
                echo json_encode( $kotaFromProvinsi );
        }
}