<?php
    class Overview extends CI_Controller{
        public function __construct(){
            parent :: __construct();
            $this->load->model("Dataadmin_model");
        }

        public function index(){
            $this->load->view("admin/overview");
        }

        public function admin(){
            $data['admin'] = $this->Dataadmin_model->ambil_Data();
            $this->load->view("admin/overview", $data);
        }
    }
?>