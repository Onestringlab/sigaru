<?php
class Kendaraan extends CI_Controller {
public $data   =   array();
public function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->model('MKonken');
  $this->load->model('MKendaraan');
  $this->load->model('MLov');
}

function index(){
  $this->data['kendaraan_list'] = $this->MKendaraan->getAll_kendaraan();
  $this->data['main_content']= 'kendaraan/view_kendaraan';
  $this->load->view('view_main',$this->data);
}


function kendaraan_form_insert(){
  $this->data['main_content']= 'kendaraan/view_kendaraan_form';
  $this->data['status_list']= $this->MLov->get_lov_bykategori('tipestatus');
  $this->data['row']=null;
  $this->data['action']='insert';
  $this->load->view('view_main',$this->data);
}


function kendaraan_form_update(){
  $this->data['row'] = $this->MKendaraan->get_kendaraan($this->uri->segment(3));
  $this->data['konken'] = $this->MKonken->get_kendaraan($this->uri->segment(3));
  $this->data['main_content']= 'kendaraan/view_kendaraan_form';
  $this->data['status_list']= $this->MLov->get_lov_bykategori('tipestatus');
  $this->data['status_ada']= $this->MLov->get_lov_bykategori('sttada');
  $this->data['status_kondisi']= $this->MLov->get_lov_bykategori('sttkondisi');
  $this->data['action']='update';
  $this->load->view('view_main',$this->data);
}


function kendaraan_form_delete(){
  $this->data['row'] = $this->MKendaraan->get_kendaraan($this->uri->segment(3));
  $this->data['main_content']= 'kendaraan/view_kendaraan_form';
  $this->data['action']='delete';
  $this->load->view('view_main',$this->data);
}


function kendaraan_manage(){
  $action = $_POST['action'];
  if($action=='insert'){
    $this->MKendaraan->add_kendaraan();
  }
  if($action=='update'){
    $this->MKendaraan->update_kendaraan();
  }
  if($action=='delete'){
    $this->MKendaraan->delete_kendaraan();
  }
  $this->data['main_content']= 'kendaraan_view';
  redirect('kendaraan');
}
}
?>
