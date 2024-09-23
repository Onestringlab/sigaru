<?php
class Jadwal extends CI_Controller {
public $data   =   array();
public function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->model('MJadwal');
  $this->load->model('MLov');
  $this->load->model('MMatkul');
  $this->load->model('MThajar');
  $this->load->model('MDosen');
  $this->load->model('MKelas');
  $this->load->model('MProdi');

}

function index(){
  $this->data['jadwal_list'] = $this->MJadwal->getAll_jadwal();
  $this->data['main_content']= 'jadwal/view_jadwal';
  $this->load->view('view_main',$this->data);
}


function jadwal_form_insert(){
  $this->data['main_content']= 'jadwal/view_jadwal_form';
  $this->data['dosen_list']= $this->MDosen->getAll_dosen();
  $this->data['prodi_list']= $this->MProdi->getAll_prodi();
  $this->data['kelas_list']= $this->MKelas->getAll_kelas();
  $this->data['matkul_list']= $this->MMatkul->getAll_matkul();
  $this->data['thajar_list']= $this->MThajar->getAll_thajar();
  $this->data['hari_list']= $this->MLov->get_lov_bykategori('hari');
  $this->data['kelas_lov_list']= $this->MLov->get_lov_bykategori('kelas');
  $this->data['row']=null;
  $this->data['action']='insert';
  $this->load->view('view_main',$this->data);
}


function jadwal_form_update(){
  $this->data['row'] = $this->MJadwal->get_jadwal($this->uri->segment(3));
  $this->data['main_content']= 'jadwal/view_jadwal_form';
  $this->data['dosen_list']= $this->MDosen->getAll_dosen();
  $this->data['prodi_list']= $this->MProdi->getAll_prodi();
  $this->data['kelas_list']= $this->MKelas->getAll_kelas();
  $this->data['matkul_list']= $this->MMatkul->getAll_matkul();
  $this->data['thajar_list']= $this->MThajar->getAll_thajar();
  $this->data['hari_list']= $this->MLov->get_lov_bykategori('hari');
  $this->data['kelas_lov_list']= $this->MLov->get_lov_bykategori('kelas');
  $this->data['action']='update';
  $this->load->view('view_main',$this->data);
}


function jadwal_form_delete(){
  $this->data['row'] = $this->MJadwal->get_jadwal($this->uri->segment(3));
  $this->data['dosen_list']= $this->MDosen->getAll_dosen();
  $this->data['prodi_list']= $this->MProdi->getAll_prodi();
  $this->data['kelas_list']= $this->MKelas->getAll_kelas();
  $this->data['matkul_list']= $this->MMatkul->getAll_matkul();
  $this->data['thajar_list']= $this->MThajar->getAll_thajar();
  $this->data['hari_list']= $this->MLov->get_lov_bykategori('hari');
  $this->data['kelas_lov_list']= $this->MLov->get_lov_bykategori('kelas');
  $this->data['main_content']= 'jadwal/view_jadwal_form';
  $this->data['action']='delete';
  $this->load->view('view_main',$this->data);
}


function jadwal_manage(){
  $action = $_POST['action'];
  if($action=='insert'){
    $this->MJadwal->add_jadwal();
  }
  if($action=='update'){
    $this->MJadwal->update_jadwal();
  }
  if($action=='delete'){
    $this->MJadwal->delete_jadwal();
  }
  $this->data['main_content']= 'jadwal_view';
  redirect('jadwal');
}
}
?>
