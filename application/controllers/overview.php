<?php
    class overview extends CI_Controller{
        public function __construct(){
            parent :: __construct();
            $this->load->model("Dataadmin_model");
        }

        public function index(){
            $data['admin'] = $this->Dataadmin_model->ambilData();
            $this->load->view("admin/overview", $data);
            
        }

        // public function admin(){
        //     $data['admin'] = $this->Dataadmin_model->ambilData();
        //     $this->load->view("admin/overview", $data);
        // }

        public function coba(){
            echo "test";
        }
    }
?>