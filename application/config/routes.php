<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']='A_login';
$route['404_override']='';
$route['translate_uri_dashes']=FALSE;

$route['daftar-suplier']="A_suplier";
//login user
$route['login']="A_login";
$route['login/proses']="A_login/cek_login";
$route['dashboard/keluar']="A_login/keluar";
//login admin
$route['login/admin']="A_login/view_login_admin";
$route['login/proses/admin']="A_login/cek_login_admin";
$route['dashboard/keluar/admin']="A_login/keluar_admin";

//dashboard
$route['dashboard']="A_dashboard";

$route['laporan/buku-besar/:num/:any']="A_project/report_buku_besar";
$route['laporan/list-penjualan/:num']="A_kontak/laporan_penjualan";
$route['laporan/list-pembelian/:num']="A_suplier/laporan_list_pembelian";
// $route['laporan/jurnal_umum/:num']="A_project/repor/t_jurnal_umum;"