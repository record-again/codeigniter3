<?php
class ProvinsiModel extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function allProvinsi()
        {
                return $this->db->get('provinsi_table')->result();
        }
        public function kotaFromProvinsi($provinsiId)
        {
                return $this->db->get_where('kota_table', array('provinsi_id' => $provinsiId))->result();
        }
}