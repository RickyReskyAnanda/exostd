<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_logged_in extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }
   
    public function index(){
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in=='administratornya'){
            redirect('xyz');
        }else{
            $this->load->view('V_login');
        }
    }    
    public function cek_logged_in(){
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in=='administratornya'){
            redirect('xyz');
        }else{
            $this->load->model('M_logged_in');
            $this->M_logged_in->cek_data_login();
        }
    }
    public function user_log_out(){
        $newdata = array('nama','email','password','foto');
        $this->session->unset_userdata($newdata);
        redirect();
    }

}
?>