<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }
    public function admin_view($page_isi,$data){
        $this->load->view('H_beranda/V_header',$data);
        $this->load->view($page_isi,$data);
        $this->load->view('H_beranda/V_footer');
    }
    //redirect login
    public function cek_session($modelnya){
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in == "administratornya") {
            $this->load->model($modelnya);
        }else{
            $this->session->set_flashdata('pesan', 'Silahkan Login Kembali !');
            redirect('','refresh');
        } 
    }
}


?>