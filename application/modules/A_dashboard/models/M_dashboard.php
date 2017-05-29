<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends MY_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_dashboard(){
        $id = $this->session->userdata('abc');
        $this->db->select('count(*) as jumlah');
        $data[1] = $this->db->get_where('tabel_project',array('status' => 'selesai','id_user' => $id))->row_array();

        $this->db->select('count(*) as jumlah');
        $data[2] = $this->db->get_where('tabel_project',array('status' => 'berjalan','id_user' => $id))->row_array();

        $this->db->select('count(*) as jumlah');
        $data[3] = $this->db->get_where('tabel_suplier',array('jenis' => 'suplier','id_user' => $id))->row_array();
        $this->db->select('count(*) as jumlah');
        $data[4] = $this->db->get_where('tabel_suplier',array('jenis' => 'kontak','id_user' => $id))->row_array();

        $this->db->select('count(*) as jumlah');
        $data[5] = $this->db->get_where('tabel_user',array('posisi' => 'user'))->row_array();

        $val['selesai'] = $data[1]['jumlah'];
        $val['berjalan']= $data[2]['jumlah'];
        $val['suplier'] = $data[3]['jumlah'];
        $val['kontak']  = $data[4]['jumlah'];
        $val['user']    = $data[5]['jumlah'];

        echo json_encode($val);
    }
}
