<?php
    Class Dataadmin_model extends CI_Model{
        public function ambil_Data(){
            return $this->db->get('admin')->result_array();
        }
    }
?>