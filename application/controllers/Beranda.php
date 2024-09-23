<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
public $data   =   array();
public function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->model('MLov');
  $this->load->model('MRuangan');
  $this->load->model('MPenyewaan');
  $this->load->model('MPeminjaman');
  $this->load->model('MKerusakan');
  $this->load->model('MPengumuman');
}

public function index(){
  $this->data['main_content']= 'beranda/view_beranda';
  $this->data['penyewaan_list'] = $this->MPenyewaan->getUpdate_penyewaan();
  $this->data['hariini_list'] = $this->MPenyewaan->getHariini_penyewaan();
  $this->data['diajukan_list'] = $this->MPenyewaan->getRuanganDiajukan();
  $this->data['disetujui_list'] = $this->MPenyewaan->getRuanganDisetujui();
  $this->data['ditolak_list'] = $this->MPenyewaan->getRuanganDitolak();

  $this->data['peminjaman_list'] = $this->MPeminjaman->getHariini_peminjaman();

  $this->data['kerusakan_list'] = $this->MKerusakan->get_data_kerusakan();

  $this->data['pengumuman_list'] = $this->MPengumuman->getAktif_pengumuman();

  $username = $this->session-> userdata('username');
  if($username!=null && $username!=""){
    $this->load->view('view_main',$this->data);
  }else{
    $this->load->view('view_main_read',$this->data);
  }
}

public function beranda_ruangan(){
  $this->data['main_content']= 'beranda/view_beranda_ruangan';
  $this->data['penyewaan_list'] = $this->MPenyewaan->getUpdate_penyewaan();
  $this->data['hariini_list'] = $this->MPenyewaan->getHariini_penyewaan();
  $this->data['diajukan_list'] = $this->MPenyewaan->getRuanganDiajukan();
  $this->data['disetujui_list'] = $this->MPenyewaan->getRuanganDisetujui();
  $this->data['ditolak_list'] = $this->MPenyewaan->getRuanganDitolak();
  $this->data['peminjaman_list'] = $this->MPeminjaman->getHariini_peminjaman();
  $this->data['pengumuman_list'] = $this->MPengumuman->getAktif_pengumuman();

  $username = $this->session-> userdata('username');
  if($username!=null && $username!=""){
    $this->load->view('view_main',$this->data);
  }else{
    $this->load->view('view_main_read',$this->data);
  }
}

public function beranda_kendaraan(){
  $this->data['main_content']= 'beranda/view_beranda_kendaraan';
  $this->data['peminjaman_list'] = $this->MPeminjaman->getHariini_peminjaman();
  $this->data['diajukan_list'] = $this->MPeminjaman->getKendaraanDiajukan();
  $this->data['disetujui_list'] = $this->MPeminjaman->getKendaraanDisetujui();
  $this->data['ditolak_list'] = $this->MPeminjaman->getKendaraanDitolak();
  $this->data['pengumuman_list'] = $this->MPengumuman->getAktif_pengumuman();

  $username = $this->session-> userdata('username');
  if($username!=null && $username!=""){
    $this->load->view('view_main',$this->data);
  }else{
    $this->load->view('view_main_read',$this->data);
  }
}

public function beranda_kerusakan(){
  $this->data['main_content']= 'beranda/view_beranda_kerusakan';
  // $this->data['peminjaman_list'] = $this->MKerusakan->get_kerusakan_status();
  $this->data['dilaporkan_list'] = $this->MKerusakan->get_kerusakan_status('Dilaporkan');
  $this->data['diterima_list'] = $this->MKerusakan->get_kerusakan_status('Diterima');
  $this->data['diperbaiki_list'] = $this->MKerusakan->get_kerusakan_status('Telah Diperbaiki');
  $this->data['pengumuman_list'] = $this->MPengumuman->getAktif_pengumuman();

  $username = $this->session-> userdata('username');
  if($username!=null && $username!=""){
    $this->load->view('view_main',$this->data);
  }else{
    $this->load->view('view_main_read',$this->data);
  }
}



public function aturan(){
    $this->data['main_content']= 'beranda/view_aturan';
    $username = $this->session-> userdata('username');
    if($username!=null && $username!=""){
      $this->load->view('view_main',$this->data);
    }else{
      $this->load->view('view_main_read',$this->data);
    }
  }
}
