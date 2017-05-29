<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_dashboard extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
         $logged_in = $this->session->userdata('logged_in');
        if($logged_in != "78jhk39") {
            redirect('A_tambahan/lock_screen');
        }
    }
    /**
     |------------------------------------------------------------------------------------------------------------------
     |                                                  KATEGORI
     |------------------------------------------------------------------------------------------------------------------
     |
     */
    public function index(){
        $this->load->view('V_kerangka');
    }  

    public function view_dashboard(){
        $this->load->view('V_home');
    }
        public function select_data_dashboard(){
            $this->load->model('M_dashboard');
            $this->M_dashboard->select_data_dashboard();
        }

    
}
?>
