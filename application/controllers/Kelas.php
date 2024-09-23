<?php
class Kelas extends CI_Controller {
public $data   =   array();
public function __construct(){
  parent::__construct();
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->model('MKelas');
  $this->data['kelas_list'] = $this->MKelas->getAll_kelas();
}

function index(){
  $this->data['main_content']= 'kelas/view_kelas';
  $this->load->view('view_main',$this->data);
}

function kelas_form_insert(){
  $this->data['main_content']= 'kelas/view_kelas_form';
  $this->data['row']=null;
  $this->data['action']='insert';
  $this->load->view('view_main',$this->data);
}

function kelas_form_update(){
  $this->data['row'] = $this->MKelas->get_kelas($this->uri->segment(3));
  $this->data['main_content']= 'kelas/view_kelas_form';
  $this->data['action']='update';
  $this->load->view('view_main',$this->data);
}

function kelas_form_delete(){
  $this->data['row'] = $this->MKelas->get_kelas($this->uri->segment(3));
  $this->data['main_content']= 'kelas/view_kelas_form';
  $this->data['action']='delete';
  $this->load->view('view_main',$this->data);
}

function kelas_manage(){
  $action = $_POST['action'];
  if($action=='insert'){
    $this->MKelas->add_kelas();
  }
  if($action=='update'){
    $this->MKelas->update_kelas();
  }
  if($action=='delete'){
    $this->MKelas->delete_kelas();
  }
  $this->data['main_content']= 'kelas_view';
  redirect('kelas');
}
}
?>
