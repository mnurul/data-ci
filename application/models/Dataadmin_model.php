<?php
    Class Dataadmin_model extends CI_Model{
        public function ambilData(){
            return $this->db->get('admin')->result_array();
        }
    }
?>